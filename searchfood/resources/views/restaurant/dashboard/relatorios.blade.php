<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard | Search Food</title>

        <!--Favicon-->
        <link rel="shortcut icon" href="{{asset('img/icon/SF.ico')}}" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        @include('templates.dashboard')

        <div class="container mt-5">
            <section class="row text-center placeholders">
                <?php $array = array("top", "bottom", "left", "right"); ?>
                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Algoma Coisa<br>0%" style="padding-top: 5px;background-color: white" class="card text-success">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart text-white bg-success"></i>
                            </div>
                            <div style="padding-top: 10px;" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="text-truncate">
                                Algoma Coisa
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Algoma Coisa<br>0%" style="padding-top: 10px;color: white" class="card text-dark">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart bg-dark text-white"></i>
                            </div>
                            <div style="padding-top: 5px;" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Algoma Coisa
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Alguma Coisa<br>0%" style="padding-top: 10px;color: white" class="card text-primary">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart bg-primary text-white"></i>
                            </div>
                            <div style="padding-top: 5px;" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Alguma Coisa
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Alguma Coisa<br>0%" style="padding-top: 10px;color: white;" class="card text-danger">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart bg-danger text-white"></i>
                            </div>
                            <div style="padding-top: 6px" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Alguma Coisa
                        </div>
                    </div>
                </div>
            </section>

            <div class="card mt-5">
                <div class="card-header">
                    RELATÓRIO DE VENDAS
                </div>
                <div class="card-body">
                    <canvas class="" id="relatorioVendas"></canvas>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>

        <!-- Graphs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script type="text/javascript">
            var ctx = document.getElementById("relatorioVendas").getContext('2d');
            var relatorioVendas = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: ['5'],
                    datasets: [{
                            label: 'Esperando Resposta',
                            data: ['1'],
                            borderWidth: 1,
                            borderColor: '#343a40',
                            backgroundColor: '#FFFF00'
                        },
                        {
                            label: 'Confirmadas',
                            data: ['3'],
                            borderWidth: 1,
                            borderColor: '#343a40',
                            backgroundColor: '#28a745'
                        },
                        {
                            label: 'Fechadas',
                            data: ['3'],
                            borderWidth: 1,
                            borderColor: '#343a40',
                            backgroundColor: '#800000'
                        },
                        {
                            label: 'Canceladas',
                            data: ['5'],
                            borderWidth: 1,
                            borderColor: '#343a40',
                            backgroundColor: '#FF0000'
                        }]
                },
                options: {
                    labels: {
                        fontStyle: "bold"
                    }
                }
            });
        </script>
    </body>
</html>