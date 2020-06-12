<main class="content">
<div class="media pb-5">
        <img src="https://fernandoportugal.com/img/fernando_portugal_designer_sobre.jpg" class="mr-3 rounded shadow" style="width: 64px;" alt="...">
        <div class="media-body">
            <h5 class="mt-0">AreIn - MVC Project</h5>
            Orgulhosamente apresento o meu primeiro projeto PHP utilizando o método MVC (MODEL VIEWS CONTROLLER) para a apresentação ao professor Leonardo Campos da Universidade de Michigan para o curso de arquitetura MVC lecionado na plataforma Coursera.
            Foram 2 meses de projeto e escolhi o tema de cadastro, registros e edições voltados para controle e gestão de funcionários. Fornecendo ao administrador a possibilidade de controle de todos os pontos de entra e saída,
            gerar planilhas em excel de todos os relatórios e ao usuário comum a gestão de suas próprias informações.
        </div>
    </div>

    <?php
        renderTitle(
            'Registrar Ponto',
            'Mantenha seu ponto consistente!',
            'icofont-check-alt'
        );
        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Os batimentos efetuados hoje</p>
        </div>
        <div class="card-body">
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 1: <?= $workingHours->time1 ?? '---' ?></span>
                <span class="record">Saída 1: <?= $workingHours->time2 ?? '---' ?></span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 2: <?= $workingHours->time3 ?? '---' ?></span>
                <span class="record">Saída 2: <?= $workingHours->time4 ?? '---' ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="innout.php" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1"></i>
                Bater o Ponto
            </a>
        </div>
    </div>

    <form class="mt-5" action="innout.php" method="post">
        <div class="input-group no-border">
            <input type="text" name="forcedTime" class="form-control"
                placeholder="Informe a hora para simular o batimento">
            <button class="btn btn-danger ml-3">
                Simular Ponto
            </button>
        </div>
    </form>

</main>