<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
    <title>Site com PHP</title>
</head>
<body>
    <section>
    <header>
        <h1>PHP</h1>
        <p>Hypertext Preprocessor</p>
    </header>
  <div>
      <?php
      $r = isset ($_GET["eb"]) ? $_GET["eb"] : "estado invalido";
       switch ($r){
        case "AC":
         case "RO": 
          case "AM":
           case "PA": 
            case "TO":
             case "AP": 
              case "RR":   
          echo "Região norte ";
          break;
        case "MT":
         case "GO":
          case "MS": 
           case "DF": 
          echo "Região Centro-Oeste";
          Break;
        case "BA":
          case "MA":
            case "PI":
              case "CE":
                case "AL":
                  case "CE":
                    case "MA":
                      case "PB":
                        case "PE":
                          case "PI":
                            case "SE":
                              case "RN":
          echo "Região Nordeste";
          break;
          case "MG":
            case "ES":
              case "RJ";
               case "SP":
          echo "Região Sudeste ";
          break;
          case "PR":
            case "SC":
              case "RS":
          echo "Região Sul ";
         }
         ?>
      <br/><br/><a href="javascript:history.go(-1)" class="botao"> Voltar</a>
      
  </div>
</section>
</body>
<footer>
    <p>Desenvolvido por <a href="https://www.linkedin.com/in/cleiton-trindade-65352a222/" target="_blank">Cleiton Trindade</a></p>
</footer>
</html>