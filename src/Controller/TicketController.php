<?php

namespace App\Controller;

use App\Entity\Ticket;
use App\Form\Ticket1Type;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Margin\Margin;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile; 



#[Route('/ticket')]
class TicketController extends AbstractController
{
    #[Route('/', name: 'app_ticket_index', methods: ['GET'])]
    public function index(TicketRepository $ticketRepository): Response
    {
        return $this->render('ticket/index.html.twig', [
            'tickets' => $ticketRepository->findAll(),
        ]);
    }

    //////////////////////json/////////////////////////

    #[Route('/json', name: 'app_ticket_indexJson')]
    public function indexJson(TicketRepository $ticketRepository, NormalizerInterface $normalizer): Response
    {
        $tickets = $ticketRepository->findAll();
        $jsonContent = $normalizer->normalize($tickets, 'json', ['groups'=>"ticket"]);
        return new JsonResponse($jsonContent);
    }
 
    #[Route('/new', name: 'app_ticket_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TicketRepository $ticketRepository): Response
    {
        $ticket = new Ticket();
        $form = $this->createForm(Ticket1Type::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ticketRepository->save($ticket, true);

            return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ticket/new.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    /////////////////////////jsonNEW/////////////////////////
    #[Route('/newJson', name: 'app_ticket_newJson')]
    public function newJson(Request $request, NormalizerInterface $normalizer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = new Ticket();
        $ticket->setDescriptionTicket($request->get('descriptionTicket'));
        $em->persist($ticket);
        $em->flush();
        $jsonContent = $normalizer->normalize($ticket,'json',['groups'=>'ticket']);
        return new Response(json_encode($jsonContent));
    }
    ////////////////////end jsonNEW/////////////////////////  

    #[Route('/competition/{id}/ticket', name: 'app_ticket_Front', methods: ['GET'])]
    public function showFront(int $id, TicketRepository $ticketRepository): Response
    {
        $ticket = $ticketRepository->findOneBy(['competition' => $id]);

        if (!$ticket) {
            return $this->render('ticket/notAvailableTicket.html.twig', [
                'message' => 'Ticket non trouvé pour la compétition ID '.$id
            ]);
        }

        return $this->render('ticket/showTicketFront.html.twig', [
            'ticket' => $ticket,
        ]);
    }

    #[Route('/{id}', name: 'app_ticket_show', methods: ['GET'])]
    public function show(Ticket $ticket): Response
    {
        return $this->render('ticket/show.html.twig', [
            'ticket' => $ticket,
        ]);
    }

    //////////////////////jsonSHOW/////////////////////////
    #[Route('/{id}/json', name: 'app_ticket_showJson')]
    public function showJson($id,Ticket $ticket,  NormalizerInterface $normalizer,ticketRepository $tr ): Response
    {
        $ticket = $tr->find($id);
        $jsonContent = $normalizer->normalize($ticket, 'json', ['groups'=>"ticket"]);
        return new Response(json_encode($jsonContent));
    }
    //////////////////////end jsonSHOW/////////////////////////

    #[Route('/{id}/edit', name: 'app_ticket_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ticket $ticket, TicketRepository $ticketRepository): Response
    {
        $form = $this->createForm(Ticket1Type::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ticketRepository->save($ticket, true);

            return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ticket/edit.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

    //////////////////////jsonEDIT/////////////////////////
    #[Route('/{id}/editJson', name: 'app_ticket_editJson')]     
    public function editJson(Request $request, Ticket $ticket, TicketRepository $ticketRepository, NormalizerInterface $normalizer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $ticketRepository->find($request->get('id'));
        $descriptionTicket = $request->get('descriptionTicket');
        if ($descriptionTicket !== null) {
            $ticket->setDescriptionTicket($descriptionTicket); 
        }
        else 
        throw new \Exception('la description ne peut pas être vide.');
        $em->persist($ticket);
        $em->flush();
        $ticketNormalizes = $normalizer->normalize($ticket, 'json', ['groups' => "ticket"]);
        return new Response(json_encode($ticketNormalizes));
    }

    #[Route('/{id}', name: 'app_ticket_delete', methods: ['POST'])]
    public function delete(Request $request, Ticket $ticket, TicketRepository $ticketRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ticket->getId(), $request->request->get('_token'))) {
            $ticketRepository->remove($ticket, true);
        }

        return $this->redirectToRoute('app_ticket_index', [], Response::HTTP_SEE_OTHER);
    }

    //////////////////////jsonDELETE/////////////////////////
    #[Route('/{id}/deleteJson', name: 'app_ticket_deleteJson')]
    public function deleteJson($id,Request $request, Ticket $ticket, TicketRepository $ticketRepository, NormalizerInterface $normalizer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $ticket = $ticketRepository->getRepository(ticket::class)->find($id);
        $em->remove($ticket);
        $em->flush();
        $ticketNormalizes = $normalizer->normalize($ticket, 'json', ['groups' => "ticket"]);
        return new Response("competition supprimée avec succée" .  json_encode($ticketNormalizes));
    }
    //////////////////////end jsonDELETE/////////////////////////


    /////////////////PDF/////////////competition/{id}/ticket/pdf
    #[Route('/competition/{id}/ticket/pdf', name: 'app_ticket_pdf', methods: ['GET'])]     
    public function AfficheTicketPDF(TicketRepository $ticketRepository, $id)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
    
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
    
        // Retrieve the Ticket object from the database based on $id
        $ticket = $ticketRepository->find($id);
    
        // Check if the ticket exists
        if (!$ticket) {
            throw $this->createNotFoundException('The ticket does not exist');
        }
    
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('ticket/myPDFticket.html.twig',
            ['ticket'=>$ticket]);
    
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
    
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');
    
        // Render the HTML as PDF
        $dompdf->render();
    
        // Output the generated PDF to Browser (force download)
        $dompdf->stream("ticket.pdf", [
            "Attachment" => false
        ]);
        return new Response("The PDF file has been succesfully generated !");
    }
    
 }


     