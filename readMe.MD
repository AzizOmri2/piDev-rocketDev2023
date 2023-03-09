
## To install KnpPaginator :
composer require knplabs/knp-paginator-bundle
- Controller/ActiviteCrudController.php 
- templates/activite_crud/view.html.twig
- Controller/PlanningCrudController.php
- templates/planning_crud/index.html.twig


## ApiCalendar :
- Nécessite 2 Lignes de code dans le fichier baseBack.html.twig
    { <link> et <script></script> } 

- Controller/CalendarController.php
- Controller/PlanningController.php
- Controller/ApiCalendarController.php
- templates/api_calendar
- templates/calendar
- templates/planning_crud


## To install domPdf
composer require dompdf/dompdf
- Controller/ActiviteJSONController.php
- button GénererPDF -> activite_crud/index.html.twig

