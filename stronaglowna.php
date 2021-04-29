<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria "SMAK"</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <header>
        <div class="header">
            <h1>Pizzeria "SMAK"</h1>
            <p>Najlepsza w mieście</p>
          </div>
          
          <div class="navbar">
            <a href="stronaglowna.php">MENU</a>
            <a href="registration.php" class="right">REJESTRACJA</a>
          </div>
    </header>
    <main>
      <div class="section2">
        <div class="text">
            <h1>MENU</h1>
        </div>
        <div class="images">
            <img src="1pizza.jpg" alt="1pizza"/>
            <img src="2pizza.jpg" alt="2pizza"/>
            <img src="3pizza.jpg" alt="3pizza"/>
            <img src="4pizza.jpeg" alt="4pizza"/>

            <img src="5pizza.jpeg" alt="5pizza"/>
            <img src="6pizza.jpeg" alt="6pizza"/>
            <img src="7pizza.jpeg" alt="7pizza"/>
            <img src="9pizza.jpeg" alt="9pizza"/>
        </div>
    </div>
        <div class="section-3">
            <div class="menuPizza">
                <a id="all">Wszystkie</a>
                <a id="classic">Klasyczne</a>
                <a id="favorite">Najpopularniejsze</a>
                <a id="spicy">Ostre</a>
                <a id="vegetarian">Wege</a>
            </div>
            <div class="row">

                <div class="cardPizza classic">
                    <img src="margherita.jpg" alt="pizza"/>
                    <a href="margherita.html"> <h1>Margherita</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>28 zł &nbsp &nbsp 17 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>

                <div class="cardPizza classic">
                    <img src="formaggio.jpg" alt="pizza"/>
                    <a href="formaggio.html"> <h1>Formaggio</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>31 zł &nbsp &nbsp 20 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>


                <div class="cardPizza favorite">
                    <img src="american.jpg" alt="pizza"/>
                    <a href="american.html"><h1>American</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>30 zł &nbsp &nbsp 19 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>


                <div class="cardPizza favorite">
                    <img src="hawai.jpg" alt="pizza"/>
                    <a href="hawai.html"><h1>Hawai</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>34 zł &nbsp &nbsp 23 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>

                <div class="cardPizza spicy">
                    <img src="piekielna.jpg" alt="pizza"/>
                    <a href="piekielna.html"><h1>Piekielna</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>33 zł &nbsp &nbsp 22 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>

                <div class="cardPizza spicy">
                    <img src="pepperoni.jpg" alt="pizza"/>
                    <a href="pepperoni.html"><h1>Pepperoni</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>35 zł &nbsp &nbsp 24 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>

                <div class="cardPizza vegetarian">
                    <img src="weganska.jpg" alt="pizza"/>
                    <a href="weganska.html"><h1>Wegańska</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>36 zł &nbsp &nbsp 25 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>


                <div class="cardPizza vegetarian">
                    <img src="spinacci.jpg" alt="pizza"/>
                    <a href="spinacci.html"><h1>Spinacci</h1></a>
                    <h3>40 cm &nbsp &nbsp 25 cm</h3>
                    <h3>36 zł &nbsp &nbsp 25 zł</h3>
                    <button id="last">ZAMÓW</button>
                </div>



            </div>
        </div>
    </main>
<script src="index.js" type="text/javascript"></script>
</body>
</html>
