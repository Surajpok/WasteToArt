<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste To Art</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
    include("../common/header.php");
    ?>
    <div class="container">
        <div class="top">
            <h1 class="title">It's Time To <span class="highlight">Transform</span><br> Trash To Art.</h1>
            <p class="subtitle">Let's, Make Our World A Better Place & Live Better life That Everyone Diserves</p>
        </div>
        <div class="form">
            <form method="post">

                <div class="formSelect1">
                    <label class="label">Type:</label>
                    <select class="select2" name="flocation">
                        <option selected value="*">ART</option>
                        <option value="Kathmandu">Kathmandu</option>
                        <option value="Biratnagar">Biratnagar</option>
                        <option value="Pokhara">Pokhara</option>
                    </select>
                </div>

                <div class="formSelect1">
                    <label class="label">Catagory:</label>
                    <select class="select2" name="fstatus">
                        <option selected value="*">METAL</option>
                        <option value="For Rent">PLASTIC</option>
                        <option value="For Sale">WOOD</option>
                    </select>
                </div>

                <div class="formSelect1">
                    <label class="label">Price Range:</label>
                    <div>
                        <input type="number" class="select2" placeholder="FROM" name="initial_price" style="width: 60px">
                        <input type="number" class="select2" placeholder="TO" name="final_price" style="width: 60px">
                    </div>
                </div>

                <div class="formSelect1">
                    <button type="submit" class="bttn" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="catcontainer">
        <h1 class="artcatagory">Art Catagory</h1>
        <div class="menu-wrapper">
            <div class="catagory">
                <div class="cat1 cat">
                    <h2>ELECTRIC</h2>
                </div>
                <div class="cat2 cat">
                    <h2>PLASTIC</h2>
                </div>
                <div class="cat3 cat">
                    <h2>WOODEN</h2>
                </div>
                <div class="cat4 cat">
                    <h2>OTHERS</h2>
                </div>
                <div class="cat4 cat">
                    <h2>Hello</h2>
                </div>

                <div class="paddles">
                    <button class="left-paddle paddle hidden">
                        < </button>
                            <button class="right-paddle paddle">
                                >
                            </button>
                </div>
            </div>
        </div>
    </div>

    <div class="awaire">
    <img class ="awaireimg" src="../img/user/art.png" alt="" />
        <div class="lines">
            <p class="awaireline">Want To Earn Money Selling Art Made From Scrap?</p>
        </div>
        <div class="awairebtn">
            <button type="submit" class="button" name="submit">Join Now</button>
        </div>
    </div>
    <h1 class="artcatagory">Featured Art</h1>

    <!--place for product-->
    <?php
    include(".././pages/product.php");
    ?>

    <div class="awaire">
        <div class="lines">
            <p class="awaireline">Want To Make Money Selling Trash & Save Earth?</p>
        </div>
        <div class="awairebtn">
            <button type="submit" class="button" name="submit">Join Now</button>
        </div>
        <img class="awaireimg1" src="../img/user/money.png" alt="" />
    </div>

    <?php
    include(".././common/footer.php");

    ?>
</body>

</html>