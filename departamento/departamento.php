<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Esperança - Departamentos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="departamento.css">
</head>
<body>

  <?php include '../includes/include.html'; ?>
    <div class="container">
      <h1>Departamentos</h1>
  
      <div class="card">
        <h2>Cardiologia</h2>
        <p>O Departamento de Cardiologia conta com equipamentos de última geração e uma equipe altamente qualificada para diagnosticar e tratar doenças do coração e do sistema circulatório. Oferecemos um atendimento personalizado para promover a saúde cardíaca dos nossos pacientes.</p>
        <div class="footer">
          <span>Dr. Preston Burke</span>
          <div class="profile-pic">
            <img src="../img/preston-burke.png" alt="Foto do Dr. Preston Burke">
          </div>
        </div>
      </div>
  
      <div class="card">
        <h2>Neurologia</h2>
        <p>Nosso Departamento de Neurologia é especializado no diagnóstico e tratamento de distúrbios neurológicos. Com uma equipe de neurologistas experientes, oferecemos um cuidado integral para garantir o bem-estar dos nossos pacientes.</p>
        <div class="footer">
          <span>Dra. Amelia Shepherd</span>
          <div class="profile-pic">
            <img src="../img/amelia-shepherd.png" alt="Foto da Dra. Amelia Shepherd">
          </div>
        </div>
      </div>
  
      <div class="card">
        <h2>Clínica Geral</h2>
        <p>A Clínica Geral oferece atendimento de primeira linha para uma ampla variedade de condições. Nossos médicos de clínica geral estão preparados para realizar diagnósticos e encaminhar para especialidades quando necessário.</p>
        <div class="footer">
          <span>Dr. Derek Shepherd</span>
          <div class="profile-pic">
            <img src="../img/derek-shepherd.png" alt="Foto do Dr. Derek Shepherd">
          </div>
        </div>
      </div>
  
    </div>
    <?php include '../includes/footer.html'; ?>
</body>
</html>
