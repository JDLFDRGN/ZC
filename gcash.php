<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="includes/css/shopsss.css">
<link rel="stylesheet" href="includes/css/fontAwesome.css">
<link rel="icon" type="image/gif/png" href="admin/assets/images/logo.png">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
    <?php
        if(isset($_POST['submit'])){
            header('Location: ./shop.php');
        }
    ?>
    <section style="relative">
        <div class="bg-primary" style="height: 18em;">
            <div class="d-flex justify-content-center align-items-center pt-4">
                <img src="./admin/assets/images/gcash.png" style="height: 5em;" alt="gcash">
                <span class="text-white h1 font-weight-bold ml-2">GCash</span>
            </div>
        </div>
        <form method="post" class="shadow-lg w-50 p-4" style="background: white; border-radius: 20px; position: absolute; top: 50%; left: 50%; transform: translateY(-50%) translateX(-50%);">
            <div>
                <div class="d-flex">
                    <div class="w-50"  style="color: rgb(148 163 184);">Merchant</div>
                    <div class="w-50">
                        <div>Zsaliah's Closet</div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="w-50" style="color: rgb(148 163 184);">Amount Due</div>
                    <div class="w-50">
                        <div style="color: rgb(34 211 238); font-weight: bold;">PHP <?php echo number_format((float) $_REQUEST['amount'], 2, '.', '');?></div>
                    </div>
                </div>
            </div>
            <div>
                <div class="h4 mt-4" style="text-align: center;">Login to pay with GCash</div>
                <div class="d-flex align-items-center py-2" style="border-bottom: 1px solid black;">
                    <div>+63</div>
                    <input type="text" name="number" style="width: 100%; margin-left: 1em; outline: none;" class="border-0" required maxlength="10">
                </div>
            </div>
            <div class="d-flex flex-column align-items-center">
                <input type="submit" name="submit" value="Next" class="bg-primary text-white w-100 border-0 py-3 h5 mt-4" style="border-radius: 50px;">
                <a href="https://www.gcash.com/" class="mt-4">Create an account</a>
            </div>
        </form>
    </section>
</body>
</html>

