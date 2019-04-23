
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unisinos</title>
        <link href="estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
            require_once 'menu.php';
            require_once 'menu02.php';
            require_once 'menu03.php';
            require_once 'galeria.php';
            
        ?>      
        <div id="fundo1"></div>
        <div id="container">
           
                <a target="_blank" href="galeria/bloco1.jpeg">
                    <img src="galeria/bloco1.jpeg" alt="Bloco1" />
                <a target="_blank" href="galeria/bloco2.jpeg">
                    <img src="galeria/bloco2.jpeg" alt="Bloco2" />
                <a target="_blank" href="galeria/bloco3.jpeg">
                    <img src="galeria/bloco3.jpeg" alt="Bloco3" />
                <a target="_blank" href="galeria/bloco4.jpeg">
                    <img src="galeria/bloco4.jpeg" alt="Bloco4" />
                    
                </a>
        </div>
        <div id="container02">
            
                <a target="_blank" href="galeria/bloco5.jpeg">
                    <img src="galeria/bloco5.jpeg" alt="Bloco1" />
                <a target="_blank" href="galeria/bloco6.jpeg">
                    <img src="galeria/bloco6.jpeg" alt="Bloco2" />
                    <a target="_blank" href="galeria/bloco7.jpeg">
                    <img src="galeria/bloco7.jpeg" alt="Bloco3" />
                <a target="_blank" href="galeria/bloco8.jpeg">
                    <img src="galeria/bloco8.jpeg" alt="Bloco4" />
                     </a>
        </div>                              
        
        
            
</div>
</div>
 
 
            <div id="rodape">
                
            <h1>Acesso Rapido</h1>       
        <table>
            <tr>
                <td>» Biblioteca Unisinos</td>
                <td>» Calendario Academico</td>
                <td>» Educaçao a distancia</td>
                <td>» Mapa</th>
            </tr>
            <tr>
                
                <td>» Portal Empresas</td>
                <td>» Portal de Inscriçao</td>
                <td>» Serviços</td>
                <td>» Trabalhe conosco</td>
                    
            </tr>
            
                <td>» Unisinos Global</td>
                <td>» Unisinos Lab</td>
                <td>» Editora Unisinos</td>
                <td>» Unisinos Carreiras</td>
        </tr>
        </table>
            <nav id="menurodape">
    <ul>
        
        <li><a href="#"> </a></li>
        <li><a href="#"> </a></li>
        <li><a href="#"> </a></li>
        <li><a href="#"> </a></li>
        <li><a href="#">ENSINO</a></li>
        <li><a href="#">ESCOLA UNISINOS </a></li>
        <li><a href="#">INSTITUTOS TECNOLÓGICOS</a></li>
        <li><a href="#">NOTICÍAS</a></li>
        <li><a href="#">INSTITUCIONAL</a></li>
        <li><a href="#">ONDE ESTAMOS</a></li>
        <li><a href="#">FALE CONOSCO</a></li>
        
       
    </ul>
                
                <img src="galeria/rodapelogo.png" alt="rodapelogo" />
</nav>
            </div>
            
        <style>
           #fundo1 { 
               width: 1900px; height: 800px;
               background-image: url('galeria/unisinos4.png');
               background-position: right bottom;
               background-repeat: no-repeat;
           }
           #fundo2 {
               width: 1600px; height: 700px;
               background-image: url('galeria/unisinos3.png');
               background-position: right bottom;
               background-repeat: no-repeat;
           }
           #fundo3 {
               width: 2000px; height: 750px;
               background-image: url('galeria/unisinos5.png');
               background-position: right bottom;
               background-repeat: no-repeat;
           }
           #container {
               margin: 100px 0px 10px 500px;
               -webkit-filter:grayscale(0%);
           }
           #container:hover {  
               -webkit-filter:grayscale(70%);
               transition: 1s;
           }
           
           #container02 {
               margin: 0px 0px 10px 500px;
               -webkit-filter:grayscale(0%);
           }
           #container02:hover {  
               -webkit-filter:grayscale(70%);
               transition: 0,05s;
           }      
           #rodape {
               background-color: #F7F6FB;
               font-family: "arial"; 
               font-size: 18px;
               
               
           }
           #rodape table tr td {
               padding: 10px 50px;          
                color:#25348C;
                text-decoration: none;
        }
           #menurodape {
        font-family: "Calibri"; 
        font-size: 15px
            
}  
    #menurodape ul{
       padding: 20px 0px 20px 0px;
        margin: 8px 0px 0px 0px;
        background-color: #262D63;
        list-style: none;
        
    }
    #menurodape ul li{
        display: inline;
        padding: 0px;
        
    }
    #menurodape ul li a{
        padding: 10px 50px;
        display: inline-block;   
        color: white;
        text-decoration: none;
        }
        #menurodape img {
        padding: 20px 200px 200px 0px;
        margin: 8px 0px 0px 0px;
        list-style: none;
        padding-left: 250px;
        }
        </style>
    </body>
    <html
        