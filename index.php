<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>My CRUD - Sistema de Agenda de Cadastro</title>
        <!-- My CSS -->
        <link rel="stylesheet" type="text/css" href="estilos.css" />
        <!-- CSS de font google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Agenda de Contatos</h1>
        </header>

        <main>
            <section class="model">
                <div class="section-body">
                    <form>
                        <div class="section-form">
                        
                            <div class="section-form-item">
                                <label>nome:</label>
                                <input type="text" name="name"/>
                            </div>

                            <div class="section-form-item">
                                <label>e-mail:</label>
                                <input type="text" name="name"/>
                            </div>

                            <div class="section-form-item">
                                <label>celular:</label>
                                <input type="text" name="name"/>
                            </div>

                            <div class="section-form-item bt">
                                <button class="button" name="salvar">salvar</button>
                                <button class="button" name="novo">novo</button>
                            </div>
                        </div>
                    </form>
                </div>

            </section>

            <section class="model">
                <div class="section-body">
                    <div class="section-tabela">
                        <div class="section-tabela-head">nome</div>
                        <div class="section-tabela-head">e-mail</div>
                        <div class="section-tabela-head">celular</div>
                        <div class="section-tabela-head">ações</div>

                        <div class="section-tabela-campos">zander de jesus lopes</div>
                        <div class="section-tabela-campos">zander@zander.com.br</div>
                        <div class="section-tabela-campos">027 9 9522-1448</div>
                        <div class="section-tabela-campos">
                            <div class="section-tabela-campos-bt">
                                <a href="">[excluir]</a>
                                <a href="">[alterar]</a>
                            </div>
                    </div>
                </div>
            </section>
            
        </main>

        <footer></footer>

    </body>
</html>

