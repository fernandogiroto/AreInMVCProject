<main class="content">
    <?php
        renderTitle(
            'Relatório Gerencial',
            'Resumo das horas trabalhadas dos funcionários',
            'icofont-chart-histogram'
        );
    ?>
    
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card shadow bg-primary">
                <div class="card-body">
                    <h5 class="card-title text-white"><i class="icon icofont-users"></i> Qtde de Funcionários</h5>
                    <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="badge badge-light"><?= $activeUsersCount ?> Funcionários</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card shadow bg-danger">
                <div class="card-body">
                    <h5 class="card-title text-white"><i class="icon icofont-patient-bed"></i> Faltas</h5>
                    <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="badge badge-light"><?= count($absentUsers) ?> Faltas</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card shadow bg-success">
                <div class="card-body">
                    <h5 class="card-title text-white"><i class="icon icofont-sand-clock"></i>Horas no Mês</h5>
                    <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="badge badge-light"><?= $hoursInMonth ?> Horas</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card shadow bg-warning">
                <div class="card-body">
                    <h5 class="card-title text-white"> <i class="icon icofont-ui-alarm"></i> Hora de Saída</h5>
                    <p class="card-text text-white">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="badge badge-light"><?= $exitTime ?></a>
                </div>
            </div>
        </div>
        <?php if(count($absentUsers) > 0): ?>
        <div class="col-8 mt-5">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Faltosos do Dia</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Relação dos funcionários que ainda não bateram o ponto</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item list-group-item-action pl-1 active border-top-0 font-weight-bold">Nome</li>
                        <?php foreach($absentUsers as $name): ?>
                            <li class="list-group-item list-group-item-action pl-1 "><?= $name ?> Tavares</li>
                        <?php endforeach ?>
                        <li class="list-group-item list-group-item-action pl-1 ">João Silva</li>
                        <li class="list-group-item list-group-item-action pl-1 ">Bruno Álvares</li>
                        <li class="list-group-item list-group-item-action pl-1 ">Laura Macedo</li>
                        <li class="list-group-item list-group-item-action pl-1 ">João Silva</li>
                        <li class="list-group-item list-group-item-action pl-1 ">Bruno Álvares</li>
                        <li class="list-group-item list-group-item-action pl-1 ">Laura Macedo</li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-4 mt-5">
            <div class="card shadow">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up.</p>
                    <img src="https://i.ibb.co/DMrT6R5/portugal.png" width="450px" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
</main>