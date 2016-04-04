<?php include_once('functions.php'); ?>
<?php $project_name = "BoilerStrap"; ?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title><?php echo($project_name) ?>Style Guide</title>
    <meta name="viewport" content="width=device-width">
    <!-- Style Guide Boilerplate Styles -->
    <link rel="stylesheet" href="css/styleguide.css">
    <link rel="stylesheet" href="css/customize-strap.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdn.jsdelivr.net/clipboard.js/1.5.3/clipboard.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="60">
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header"><a class="navbar-brand" href="#"><strong><?php echo($project_name) ?></strong> Style
                Guide</a></div>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Select an element: <b
                        class="caret"></b></a>
                <ul class="dropdown-menu  scroll-menu sg-sect">
                    <?php listElementsAsOptions('docs'); ?>
                    <?php listElementsAsOptions('foundation'); ?>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation" class="dropdown-header">Base Styles</li>
                    <?php listMarkupAsOptions('base'); ?>
                    <li role="presentation" class="divider"></li>
                    <li role="presentation" class="dropdown-header">Patterns</li>
                    <?php listMarkupAsOptions('patterns'); ?>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--/.sg-header-->

<div class="sg-body sg-container container">
    <h1 class="page-header">Style Guide Documentation</h1>
    <?php showDocs(); ?>
    <h1 class="page-header">Foundation</h1>
    <?php showFoundation(); ?>
    <h1 class="page-header">Example</h1>
    <?php showMarkup('example'); ?>
    <h1 class="page-header">Base Styles</h1>
    <?php showMarkup('base'); ?>
    <h1 class="page-header">Patterns
        <small> - Design and mark-up patterns unique to your site.</small>
    </h1>
    <?php showMarkup('patterns'); ?>
</div>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/customize-strap.js"></script>
<script src="js/sg-plugins.js"></script>
<script src="js/sg.js"></script>
</body>
</html>
