<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($d->title) ? $d->title : get_sitename(); ?></title>
    
    <?php require_once INCLUDES.'links.php'; ?>
    <?php require_once INCLUDES.'scripts.php'; ?>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">

            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <a class="navbar-brand" href="home"><i class="fas fa-cube"></i> Software de Sistemas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php if(CONTROLLER == "home"): ?>
                            <li class="nav-item active"><a href="home" class="nav-link">Inicio</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a href="home" class="nav-link">Inicio</a></li>
                        <?php endif; ?>
                        <?php if(CONTROLLER == "car_lig"): ?>
                            <li class="nav-item active"><a href="car_lig" class="nav-link">Cargadores y Ligadores</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a href="car_lig" class="nav-link">Cargadores y Ligadores</a></li>
                        <?php endif; ?>
                        <?php if(CONTROLLER == "compiladores"): ?>
                            <li class="nav-item active"><a href="compiladores" class="nav-link">Compiladores</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a href="compiladores" class="nav-link">Compiladores</a></li>
                        <?php endif; ?>
                        <?php if(CONTROLLER == "horoscopos"): ?>
                            <li class="nav-item active"><a href="horoscopos" class="nav-link">Horoscopos</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a href="horoscopos" class="nav-link">Horoscopos</a></li>
                        <?php endif; ?>
                </div>
            </nav>
        </header>        
    </div>
