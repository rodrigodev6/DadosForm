<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <!-- <link rel="stylesheet" href="css/modal.css"> -->
    <title>Document</title>
</head>

<body>
    <form id="form1" action="insert-proponente.php" method="post">
        <div class="container">
            <h2>FORMULÁRIO DE INSCRIÇÃO</h2>
            <p>Este formulário é o instrumento para solicitação de apoio a projetos de interesse socioambiental
                propostos por entidades privadas sem fins lucrativos, que contribuam para a promoção do desenvolvimento
                social e sustentável no entorno das operações da Companhia. Todos os campos devem ser, obrigatoriamente,
                preenchidos, e todos os documentos solicitados devem ser inseridos nos uploads solicitados, observando
                as respectivas orientações e a coerência entre os elementos do Projeto. Não serão permitidos envios de
                outra forma para a seleção. As solicitações que não seguirem as regras de submissão estarão
                automaticamente eliminadas do certame.</p>
            <hr>
            </hr>
            <h3>1. PROPONENTE</h3>
            <h4>1.2 Identificação</h4>

            <!-- CAMPOS DO MODELO PROPONENTE -->
            <div class="parte-proponente">
                <div class="form-group">
                    <label for="nome">Nome do Proponente:</label>
                    <input type="text" id="nome" name="proponente-nome" placeholder="Nome" required>
                </div>

                <div class="form-group">
                    <label for="cnpj">CNPJ:</label>
                    <input type="text" id="cnpj" name="proponente-cnpj" maxlength="18" required
                        title="Preencha no formato xx.xxx.xxx/xxxx-xx" placeholder="xx.xxx.xxx/xxxx-xx" required>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço completo:</label>
                    <input type="text" id="endereco" name="proponente-endereco" placeholder="Endereço" required>
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="proponente-cidade" placeholder="Cidade" required>
                </div>

                <div class="form-group">
                    <label for="uf">UF:</label>
                    <input type="text" id="uf" name="proponente-uf" placeholder="UF" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="proponente-telefone" placeholder="(xx) xxxx-xxxx" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="proponente-email" placeholder="Fulano@company.com" required>
                </div>
            </div>
            <!-- FIM DOS CAMPOS DO MODELO PROPONENTE -->

            <h4>1.3 Dados Representante Legal:</h4>

            <!-- CAMPOS DO MODELO REPRESENTANTE -->
            <div>
                <div class="form-group">
                    <label for="rep_nome">Nome Completo:</label>
                    <input type="text" id="nome_representante" name="representante-nome" placeholder="Nome Completo"
                        required>
                </div>

                <div class="form-group">
                    <label for="rep_nome">CPF:</label>
                    <input type="text" id="cpf_representante" name="representante-cpf" placeholder="CPF" required>
                </div>

                <div class="form-group">
                    <label for="rep_nome">Cargo:</label>
                    <input type="text" id="cargo_representante" name="representante-cargo" placeholder="Cargo" required>
                </div>

                <div class="form-group">
                    <label for="rep_nome">Formação:</label>
                    <input type="text" id="formacao" name="representante-formacao" placeholder="Formação" required>
                </div>

                <div class="form-group">
                    <label for="rep_nome">E-mail:</label>
                    <input type="text" id="email_representante" name="representante-email" placeholder="E-mail"
                        required>
                </div>

                <div class="form-group">
                    <label for="rep_nome">Telefone Contato:</label>
                    <input type="text" id="telefone_representante" name="representante-telefone" placeholder="Telefone"
                        required>
                </div>
            </div>
            <!-- FIM DOS CAMPOS DO MODELO REPRESENTANTE -->

            <h4>1.4 Documentos Proponente:</h4>

            <button onclick="openModal()">Upload dos arquivos</button>

            <!-- Modal -->
            <div id="uploadModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>

                    <form>
                        <label for="inputCNPJ">Cartão CNPJ:</label>
                        <input type="file" id="inputCNPJ" accept=".pdf,.jpg"><br><br>

                        <label for="inputCertidaoRF">Certidão Negativa da Receita Federal:</label>
                        <input type="file" id="inputCertidaoRF" accept=".pdf,.jpg"><br><br>

                        <label for="inputCertidaoFiscal">Certidão de Regularidade Fiscal:</label>
                        <input type="file" id="inputCertidaoFiscal" accept=".pdf,.jpg"><br><br>

                        <label for="inputCertidaoFGTS">Certidão do FGTS:</label>
                        <input type="file" id="inputCertidaoFGTS" accept=".pdf,.jpg"><br><br>

                        <label for="inputCertidaoTrabalhista">Certidão Trabalhista:</label>
                        <input type="file" id="inputCertidaoTrabalhista" accept=".pdf,.jpg"><br><br>

                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>

            <h4>1.4 Dados Atuação da Instituição:</h4>


            <div class="form-group">
                <label for="inputEstado">Estado:</label>
                <select id="inputEstado" class="form-control">
                    <option selected>Escolher...</option>
                    <option>RJ</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputMunicipio">Município(s):</label>
                <select id="inputMunicipio" class="form-control">
                    <option selected>Escolher...</option>
                    <option>Rio de Janeiro</option>
                    <option>Nova Iguaçu</option>
                    <option>Seropédica</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputBairro">Bairro(s):</label>
                <select id="inputBairro" class="form-control">
                    <option selected>Escolher...</option>
                    <option>Bonsucesso</option>
                    <option>Parque Flora(Nova Iguaçu)</option>
                    <option>Jardim Maracanã(Seropédica)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputMunicipio">Localidades:</label>
                <select id="inputMunicipio" class="form-control">
                    <option selected>Escolher...</option>
                    <option>Compleco do Alemão(Rio)</option>
                    <option>Buraco do Boi(Nova Iguaçu)</option>
                </select>
            </div>

            <input type="submit" value="Enviar">
    </form>
    <!-- <script>
// Função para abrir o modal
function openModal() {
  document.getElementById('uploadModal').style.display = 'block';
}

// Função para fechar o modal
function closeModal() {
  document.getElementById('uploadModal').style.display = 'none';
}
</script> -->
</body>

</html>