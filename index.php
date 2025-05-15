<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Currículo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <?php
        $nomeCompleto = "Guilherme Leandro Nogueira"; 
        $idade = 20; 
        $fotoPerfil = "imagens/sua_foto.jpg"; 
    ?>
    <div class="perfil">
        <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
        <h1><?php echo $nomeCompleto; ?></h1>
        <p><?php echo $idade; ?> anos</p>
    </div>
  </header>

  <section id="experiencia">
    <h2>Experiência Profissional</h2>
    <?php
        $experiencias = [
            [
                "empresa" => "LDS",
                "cargo" => "Desenvolvedor IOS",
                "periodo" => "2025 – 2025",
                "descricao" => "Participação em imersão focada no aprendizado e prática de desenvolvimento iOS."
            ],
            [
                "empresa" => "Farmácia Macêdo",
                "cargo" => "Auxiliar Administrativo",
                "periodo" => "2022 – 2022",
                "descricao" => "Atuei no suporte às rotinas administrativas da farmácia, organizando documentos, auxiliando no controle de estoque e atendimento ao público. Colaborei com a equipe para manter o fluxo de trabalho eficiente e o bom funcionamento das operações diárias."

                
                
                
            ],

        ];
        ?>

        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="periodo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
        <?php endif; ?>

  </section>

  <section id="cursos">
    <h2>Cursos e Formações</h2>
    <?php
        $cursos = [
            [
                "nome" => "Sistemas de Informação",
                "instituicao" => "IFCE",
                "periodo" => "2023 - 2027"
            ],
            [
                "nome" => "Desenvolvedor Web Full Stack",
                "instituicao" => "Geração Tech",
                "periodo" => "2024 - 2024"
            ],
            [
                "nome" => "Energif",
                "instituicao" => "IFCE",
                "periodo" => "2023 - 2023"
            ]

        ];
        ?>

        <?php if (!empty($cursos)): ?>
        <ul>
            <?php foreach ($cursos as $curso): ?>
            <li>
                <h3><?php echo $curso['nome']; ?></h3>
                <h4><?php echo $curso['instituicao']; ?></h4>
                <p class="periodo"><?php echo $curso['periodo']; ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
    <?php endif; ?>

  </section>

  <section id="habilidades">
    <h2>Habilidades</h2>
    <?php
$habilidades = [
    "Inglês" => 8,
    "PHP" => 0, // Avalie sua habilidade de 0 a 10
    "HTML" => 6,
    "CSS" => 6,
    "Python" => 7,
    "Banco de Dados" => 8,
    "C" => 6
];

$hobbies = [
    "Leitura" => 7, // Avalie seu nível de interesse de 0 a 10
    "Esportes" => 8,
    "Games" => 7,
    "Desenhar" => 6
];
?>

<h3>Competências</h3>
    <?php if (!empty($habilidades)): ?>
    <ul>
        <?php foreach ($habilidades as $habilidade => $nivel): ?>
        <li>
            <?php echo $habilidade; ?>
            <div class="barra-nivel">
                <?php for ($i = 0; $i < $nivel; $i++): ?>
                    <span class="preenchido hobby"></span>
                <?php endfor; ?>
                <?php for ($i = $nivel; $i < 10; $i++): ?>
                    <span></span>
                <?php endfor; ?>
                (<?php echo $nivel; ?>/10)
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <h3>Hobbies</h3>
    <?php if (!empty($hobbies)): ?>
    <ul>
        <?php foreach ($hobbies as $hobby => $interesse): ?>
        <li>
            <?php echo $hobby; ?>
            <div class="barra-nivel">
                <?php for ($i = 0; $i < $interesse; $i++): ?>
                    <span class="preenchido hobby"></span>
                <?php endfor; ?>
                <?php for ($i = $interesse; $i < 10; $i++): ?>
                    <span></span>
                <?php endfor; ?>
                (<?php echo $interesse; ?>/10)
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

  </section>

  <footer>
    <p>© <?php echo date("Y"); ?> Guilherme Leandro</p>
  </footer>
</body>
</html>
