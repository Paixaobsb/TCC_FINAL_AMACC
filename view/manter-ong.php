<!DOCTYPE html>
<html lang="pr-br">
    <head>
        <title>Manter ONG</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body style="background-image: url('../_imagens/ceu-claro2.jpg')">

        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Usuários</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"><a id="cor-doacoes" href="relatorio.php" class="btn btn-warning">Doações</a> <a id="cor-doacoes" href="historico.php" class="btn btn-warning">Histórico</a> <a id="cor-doacoes" href="relatorio-contato.php" class="btn btn-warning">Contatos</a></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lucas Medeiros</td>
                        <td>lucasmp@outlook.com</td>
                        <td>(61) 9 8216-8899</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir">
                                Excluir
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Jacqueline Ruivo</td>
                        <td>Jacque_ruivo@hotmail.com</td>
                        <td>(61) 9 9816-4746</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar1">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir1">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Luis Gustavo</td>
                        <td>l.gustavo@gmail.com</td>
                        <td>(61) 9 8215-6644</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar3">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir3">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Marta Oliveira</td>
                        <td>martalouzeiro@gmail.com</td>
                        <td>(61) 9 8156-0080</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar4">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluir4">
                                Excluir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- The Modal -->
            <div class="modal" id="editar">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="tex" value="Lucas Medeiros" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">sair</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal editar1 -->
            <div class="modal" id="editar1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="text" value="Jacqueline Ruivo" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                        </div>

                    </div>
                </div>
            </div> 

            <!-- Modal excluir -->
            <div class="modal" id="excluir">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="tex" value="Lucas Medeiros" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Modal excluir1 -->
            <div class="modal" id="excluir1">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="tex" value="Jacqueline Ruivo" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="modal" id="excluir3">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="tex" value="Luis Gustavo" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Modal excluir1 -->
            <div class="modal" id="excluir4">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="tex" value="Marta Oliveira" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="editar3">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="tex" value="Luis Gustavo" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">sair</button>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Modal excluir1 -->
            <div class="modal" id="editar4">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Nome:</label>
                            <input type="tex" value="Marta Oliveira" name="nome" class="form-control">  
                        </div>

                        <!-- Modal footer -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">sair</button>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>CEP</td>
                        <td>72465-000</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarcep">
                                Editar
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>CNPJ</td>
                        <td>60.999.999/0000-00</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarcnpj">
                                Editar
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>E-mail</td>
                        <td>amacc.ong@gmail.com</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editaremail">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluiremail">
                                Excluir
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Telefone</td>
                        <td>(61) 30477218</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarphone">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#excluirphone">
                                Excluir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal" id="editarcep">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">CEP:</label>
                            <input type="tex" value="72465-000" name="cep" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">sair</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Modal editar1 -->
            <div class="modal" id="editarcnpj">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">CNPJ:</label>
                            <input type="text" value="60.999.999/0000-00" name="cpnj" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                        </div>

                    </div>
                </div>
            </div> 

            <div class="modal" id="excluiremail">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Delete</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">E-mail:</label>
                            <input type="tex" value="amacc.ong@gmail.com" name="email" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Modal excluir1 -->
            <div class="modal" id="excluirphone">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Delete</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Telefone:</label>
                            <input type="tex" value="(61) 30477218" name="phone" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal" id="editaremail">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">E-mail:</label>
                            <input type="tex" value="amacc.ong@gmail.com" name="email" class="form-control">  
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">sair</button>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- Modal excluir1 -->
            <div class="modal" id="editarphone">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Update</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <label for"nome">Telefone:</label>
                            <input type="tex" value="(61) 30477218" name="phone" class="form-control">  
                        </div>

                        <!-- Modal footer -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">salvar e sair</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">sair</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a id="salvar-e-sair" class="btn btn-success" href="login.php" role="button">Sair</a>
    </body>
</html>