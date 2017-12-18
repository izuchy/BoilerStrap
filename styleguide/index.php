<?php include_once('functions.php'); ?>
<?php $project_name = "BoilerStrap"; ?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?php echo($project_name) ?>Style Guide</title>
    <meta name="viewport" content="width=device-width">
    <!-- Style Guide Boilerplate Styles -->
    <link rel="stylesheet" href="css/styleguide.css">
    <link rel="stylesheet" href="css/boilerstrap.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="60">
<!-- Fixed navbar -->



<!--<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">-->
<!--    <a class="navbar-brand" href="#"><strong>--><?php //echo($project_name) ?><!--</strong> Style-->
<!--        Guide</a></a>-->
<!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!---->
<!--    <div class="collapse navbar-collapse" id="navbarsExampleDefault">-->
<!--        <ul class="navbar-nav mr-auto">-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                <div class="dropdown-menu scroll-menu sg-sect" aria-labelledby="dropdown01">-->
<!--                    --><?php //listElementsAsOptions('docs'); ?>
<!--                </div>-->
<!--                --><?php //listElementsAsOptions('foundation'); ?>
<!--                <li role="presentation" class="divider"></li>-->
<!--                <li role="presentation" class="dropdown-header">Components Styles</li>-->
<!--                --><?php //listMarkupAsOptions('components'); ?>
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</nav>-->


<div class="sg-body sg-container container">
    <h1 class="page-header">Style Guide Documentation</h1>
    <?php showDocs(); ?>
    <h1 class="page-header">Foundation</h1>
    <?php showFoundation(); ?>
    <h1 class="page-header">Example</h1>
    <?php showMarkup('example'); ?>
    <h1 class="page-header">Components</h1>
    <?php showMarkup('components'); ?>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/customize-strap.js"></script>
<script src="js/sg-plugins.js"></script>
<script src="js/sg.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
</body>
</html>
