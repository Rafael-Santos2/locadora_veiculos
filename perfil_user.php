<?php
//  backend
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER - Locadora de veículos</title>
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link dos ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- link do css -->
    <link rel="stylesheet" href="style.css">
</head>

<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuário -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h2>Sistema de Locadora de Veículos</h2>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size:24px;"></i>
                        </span>
                        <!-- Bem vindo,[usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Usuário</strong>!
                        </span>
                        <!-- botão de logout -->
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulário para adicionar novos veículos -->
        <div class="row same-height-row">

            <div class="col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">
                            Calcular a previsão de aluguel 💰
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="input-label">
                                    Tipo de veículo:
                                </label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">
                                    Quantidade de dias 📅
                                </label>
                                <input type="number" name="dias_calculo" class="form-control"
                                    value="1" required>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="calcular">
                                Calcular previsão
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- tabela de veiculos cadastrados -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Veículos cadastrados 🚘</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Modelo</th>
                                        <th>Placa</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carro</td>
                                        <td>
                                            <span>
                                                <button class="btn btn-success p-0" data-bs-toggle="modal" data-bs-target="#fordgt">Ford GT 2008</button>
                                            </span>
                                        </td>
                                        <td>OVI1N14</td>
                                        <td>
                                            <span class="badge bg-success">Disponível</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carro</td>
                                        <td>
                                            <span><button class="btn btn-warning p-0" data-bs-toggle="modal" data-bs-target="#modalcorsaclassic">Corsa Classic 2002</button></span>
                                        </td>
                                        <td>RAF1N15</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Moto</td>
                                        <td>
                                            <span><button class="btn btn-warning p-0" data-bs-toggle="modal" data-bs-target="#modalHayabusa2016">Hayabusa 2016</button></span>
                                        </td>
                                        <td>JUL1A20</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="fordgt" tabindex="-1" aria-labelledby="fordgt" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="fordgt">Detalhes de João</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Marca:</strong> Ford</li>
                            <li><strong>Modelo:</strong> GT</li>
                            <li><strong>Ano:</strong> 2008</li>
                            <li><strong>Motor:</strong> 5.4L V8 Supercharged</li>
                            <li><strong>Potência:</strong> 550 cavalos a 6.500 rpm</li>
                            <li><strong>Torque:</strong> 678 Nm (69 kgfm) a 3.750 rpm</li>
                            <li><strong>Transmissão:</strong> Manual de 6 marchas</li>
                            <li><strong>Tração:</strong> Traseira (RWD)</li>
                            <li><strong>0 a 100 km/h:</strong> Aproximadamente 3,6 segundos</li>
                            <li><strong>Velocidade máxima:</strong> Cerca de 330 km/h</li>
                            <li><strong>Peso:</strong> Aproximadamente 1.520 kg</li>
                            <li><strong>Consumo médio:</strong> 5,5 km/l (cidade) / 8,5 km/l (estrada)</li>
                            <li><strong>Tipo de carroceria:</strong> Coupé esportivo</li>
                            <li><strong>Produção limitada:</strong> Cerca de 4.038 unidades (2005–2006)</li>
                            <li><strong>Design inspirado:</strong> No clássico Ford GT40</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalcorsaclassic" tabindex="-1" aria-labelledby="modalcorsaclassicLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalcorsaclassicLabel">Corsa Classic 2002</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Marca:</strong> Chevrolet</li>
                            <li><strong>Modelo:</strong> Corsa Classic</li>
                            <li><strong>Ano:</strong> 2002</li>
                            <li><strong>Motor:</strong> 1.0 ou 1.6 (dependendo da versão)</li>
                            <li><strong>Potência:</strong> Aproximadamente 60 cv (1.0) / 92 cv (1.6)</li>
                            <li><strong>Torque:</strong> 8,3 kgfm (1.0) / 13,3 kgfm (1.6)</li>
                            <li><strong>Transmissão:</strong> Manual de 5 marchas</li>
                            <li><strong>Tração:</strong> Dianteira (FWD)</li>
                            <li><strong>0 a 100 km/h:</strong> Cerca de 15 segundos (1.0)</li>
                            <li><strong>Velocidade máxima:</strong> Aproximadamente 150 km/h (1.0)</li>
                            <li><strong>Peso:</strong> Aproximadamente 900 kg</li>
                            <li><strong>Consumo médio:</strong> 10 km/l (cidade) / 14 km/l (estrada)</li>
                            <li><strong>Tipo de carroceria:</strong> Sedã compacto</li>
                            <li><strong>Combustível:</strong> Gasolina</li>
                            <li><strong>Destaques:</strong> Econômico, manutenção barata e confiável</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalHayabusa2016" tabindex="-1" aria-labelledby="modalHayabusa2016Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalHayabusa2016Label">Suzuki Hayabusa 2016</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Marca:</strong> Suzuki</li>
                            <li><strong>Modelo:</strong> GSX1300R Hayabusa</li>
                            <li><strong>Ano:</strong> 2016</li>
                            <li><strong>Motor:</strong> 1.340 cc, 4 cilindros em linha, DOHC, 16 válvulas</li>
                            <li><strong>Potência:</strong> Aproximadamente 197 cv a 9.500 rpm</li>
                            <li><strong>Torque:</strong> 15,7 kgfm a 7.200 rpm</li>
                            <li><strong>Transmissão:</strong> Manual de 6 marchas</li>
                            <li><strong>Tração:</strong> Traseira (por corrente)</li>
                            <li><strong>0 a 100 km/h:</strong> Cerca de 2,7 segundos</li>
                            <li><strong>Velocidade máxima:</strong> Limitada eletronicamente a cerca de 299 km/h</li>
                            <li><strong>Peso:</strong> Aproximadamente 266 kg (com tanque cheio)</li>
                            <li><strong>Consumo médio:</strong> 14–18 km/l (dependendo do estilo de pilotagem)</li>
                            <li><strong>Tipo:</strong> Moto esportiva (Sport Touring)</li>
                            <li><strong>Destaques:</strong> Uma das motos mais rápidas do mundo, conhecida pela potência e estabilidade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>