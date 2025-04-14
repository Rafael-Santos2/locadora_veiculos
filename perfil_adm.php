<?php
//  backend
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Locadora de veículos</title>
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
                            Bem-vindo, <strong>Administrador</strong>!
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

            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Adicionar novo veículo 🚙</h4>
                    </div>
                    <div class="card-body">
                        <form action="post" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="modelo" class="form-label">
                                    Modelo:
                                </label>
                                <input type="text" class="form-control" name="modelo" required>
                                <div class="invalid-feedback">
                                    Informe um modelo válido!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="placa" class="form-label">
                                    Placa:
                                </label>
                                <input type="text" class="form-control" name="placa" required>
                                <div class="invalid-feedback">
                                    Informe uma placa válida!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">
                                    Tipo:
                                </label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="empty" disabled selected> </option>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                </select>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="adicionar">
                                Adicionar veículo
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
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
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Ford GT 2008</td>
                                        <td>OVI1N14</td>
                                        <td>
                                            <span class="badge bg-success">Disponível</span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                    <!-- Botão Deletar (sempre disponivel para o admin) -->
                                                    <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">
                                                        Deletar
                                                    </button>

                                                    <div class="rent-group">
                                                        <!-- Veiculo alugado -->

                                                        <button class="btn btn-warning btn-sm" type="submit" name="devolver">
                                                            Devolver
                                                        </button>
                                                        <!-- Veiculo disponivel -->
                                                        <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                        <button class="btn btn-primary btn-sm" type="submit" name="alugar">
                                                            Alugar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carro</td>
                                        <td>Corsa Classic 2002</td>
                                        <td>RAF1N15</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                    <!-- Botão Deletar (sempre disponivel para o admin) -->
                                                    <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">
                                                        Deletar
                                                    </button>

                                                    <div class="rent-group">
                                                        <!-- Veiculo alugado -->

                                                        <button class="btn btn-warning btn-sm" type="submit" name="devolver">
                                                            Devolver
                                                        </button>
                                                        <!-- Veiculo disponivel -->
                                                        <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                        <button class="btn btn-primary btn-sm" type="submit" name="alugar">
                                                            Alugar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Moto</td>
                                        <td>Hayabusa 2016</td>
                                        <td>JUL1A20</td>
                                        <td>
                                            <span class="badge bg-warning">Alugado</span>
                                        </td>
                                        <td>
                                            <div class="action-wrapper">
                                                <form action="post" class="btn-group-actions">

                                                    <!-- Botão Deletar (sempre disponivel para o admin) -->
                                                    <button class="btn btn-danger btn-sm delete-btn" type="submit" name="deletar">
                                                        Deletar
                                                    </button>

                                                    <div class="rent-group">
                                                        <!-- Veiculo alugado -->

                                                        <button class="btn btn-warning btn-sm" type="submit" name="devolver">
                                                            Devolver
                                                        </button>
                                                        <!-- Veiculo disponivel -->
                                                        <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                        <button class="btn btn-primary btn-sm" type="submit" name="alugar">
                                                            Alugar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>