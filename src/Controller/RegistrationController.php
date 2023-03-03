<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\UserAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use ReCaptcha\ReCaptcha;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{

    #[Route('/registerChoices', name: 'app_registerChoices', methods: ['GET'])]
    public function registerChoices(): Response
    {
        return $this->render('registration/registerChoices.html.twig');
    }

    #[Route('/registerAdmin', name: 'app_registerAdmin')]
    public function registerAdmin(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
        $role = "ROLE_ADMIN";
        $user = new User();
        $filesystem = new Filesystem();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles([$role]);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();
            $uploadedFile = $form->get('image')->getData();
            $formData = $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $destinationPath = 'uploads/image' . strval($user->getId()) . '.png';
            $user->setImage($destinationPath);
            $filesystem->copy($sourcePath, $destinationPath);
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email
            return $this->redirectToRoute('app_login');
        }
        return $this->render('registration/registerAdmin.html.twig', [
            'registrationForm' => $form->createView()
        ]);

    }


    #[Route('/registerAbonne', name: 'app_registerUser')]
    public function registerAbonne(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $role = "ROLE_ABONNE";
        $user = new User();
        $filesystem = new Filesystem();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles([$role]);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();
            $uploadedFile = $form->get('image')->getData();
            $formData = $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $destinationPath = 'uploads/image' . strval($user->getId()) . '.png';
            $user->setImage($destinationPath);
            $filesystem->copy($sourcePath, $destinationPath);
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email
            return $this->redirectToRoute('app_login');
        }
        return $this->render('registration/registerUser.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


    #[Route('/registerCoach', name: 'app_registerCoach')]
    public function registerCoach(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $role = "ROLE_COACH";
        $filesystem = new Filesystem();
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles([$role]);
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();
            $uploadedFile = $form->get('image')->getData();
            $formData = $uploadedFile->getPathname();
            $sourcePath = strval($formData);
            $destinationPath = 'uploads/image' . strval($user->getId()) . '.png';
            $user->setImage($destinationPath);
            $filesystem->copy($sourcePath, $destinationPath);
            $entityManager->persist($user);
            $entityManager->flush();

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email
            return $this->redirectToRoute('app_login');


        }

        return $this->render('registration/registerCoach.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }












    /**register coach json**/

    /**   #[Route('/registerCoachMobile', name: 'app_registerAdmin_mobile')]
    public function registerCoachMobile(Request $req, SerializerInterface $serializer, TranslatorInterface $translator, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
    $role = "ROLE_COACH";
    $user = new User();

    $form = $this->createForm(RegistrationFormType::class, $user);
    $form->handleRequest($req);
    $data = $req->getContent();
    $user = $serializer->deserialize($data, User::class, 'json');
    $user->setRoles([$role]);
    $user->setPassword(
    $userPasswordHasher->hashPassword(
    $user,
    $user->getPassword()
    )
    );
    $entityManager->persist($user);
    $entityManager->flush();

    $entityManager->persist($user);
    $entityManager->flush();
    // do anything else you need here, like send an email
    $jsonContent = $serializer->serialize($user, 'json', ['groups' => 'users']);
    return new Response(json_encode($jsonContent));
    }**/
    /**register abonne json**/
    /**#[Route('/registerAbonneMobile', name: 'app_registerAdmin_mobile')]
    public function registerAbonneMobile(Request $req, SerializerInterface $serializer, TranslatorInterface $translator, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
    {
    $role = "ROLE_ABONNE";
    $user = new User();

    $form = $this->createForm(RegistrationFormType::class, $user);
    $form->handleRequest($req);
    $data = $req->getContent();
    $user = $serializer->deserialize($data, User::class, 'json');
    $user->setRoles([$role]);
    $user->setPassword(
    $userPasswordHasher->hashPassword(
    $user,
    $user->getPassword()
    )
    );
    $entityManager->persist($user);
    $entityManager->flush();

    $entityManager->persist($user);
    $entityManager->flush();
    // do anything else you need here, like send an email
    $jsonContent = $serializer->serialize($user, 'json', ['groups' => 'users']);
    return new Response(json_encode($jsonContent));
    }

    /**register admin json**//**

#[Route('/registerAdminMobile', name: 'app_registerAdmin_mobile')]
public function registerAdminMobile(Request $req, SerializerInterface $serializer, TranslatorInterface $translator, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, UserAuthenticator $authenticator, EntityManagerInterface $entityManager, UserRepository $userRepository): Response
{
$role = "ROLE_ADMIN";
$user = new User();

$form = $this->createForm(RegistrationFormType::class, $user);
$form->handleRequest($req);
$data = $req->getContent();
$user = $serializer->deserialize($data, User::class, 'json');
$user->setRoles([$role]);
$user->setPassword(
$userPasswordHasher->hashPassword(
$user,
$user->getPassword()
)
);
$entityManager->persist($user);
$entityManager->flush();

$entityManager->persist($user);
$entityManager->flush();
// do anything else you need here, like send an email
$jsonContent = $serializer->serialize($user, 'json', ['groups' => 'users']);
return new Response(json_encode($jsonContent));
}**/


}
