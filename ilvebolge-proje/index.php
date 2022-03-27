<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="design/bootstrap.css">

    <title>turkish city</title>
     <style>
    body{
    width: 100%;
    height: 100%;
    margin:0;
    padding: 0;
    border: 0;
    outline: 0;
    text-align:center;    
    }    
    
    div{
    padding:1rem;
    color:#130400;
    background-color:white;
    padding-bottom: 0; 
    }


    select {
        margin-bottom: 1rem;
        padding-bottom: 0.25rem;
        border-radius: 0;
        height: 36px;
        font-family: bold;
    
    }
    
    </style>

  </head>
  <body>
    <?php $il=["Adana", "Adıyaman", "Afyon", "Ağrı", "Amasya", "Ankara", "Antalya", "Artvin", "Aydın", "Balıkesir", "Bilecik", "Bingöl", "Bitlis", "Bolu", "Burdur", "Bursa", "Çanakkale", "Çankırı", "Çorum", "Denizli", "Diyarbakır", "Edirne", "Elazığ", "Erzincan", "Erzurum", "Eskişehir", "Gaziantep", "Giresun", "Gümüşhane", "Hakkari", "Hatay", "Isparta", "İçel (Mersin)", "İstanbul", "İzmir", "Kars", "Kastamonu", "Kayseri", "Kırklareli", "Kırşehir", "Kocaeli", "Konya", "Kütahya", "Malatya", "Manisa", "Kahramanmaraş", "Mardin", "Muğla", "Muş", "Nevşehir", "Niğde", "Ordu", "Rize", "Sakarya", "Samsun", "Siirt", "Sinop", "Sivas", "Tekirdağ", "Tokat", "Trabzon", "Tunceli", "Şanlıurfa", "Uşak", "Van", "Yozgat", "Zonguldak", "Aksaray", "Bayburt", "Karaman", "Kırıkkale", "Batman", "Şırnak", "Bartın", "Ardahan", "Iğdır", "Yalova", "Karabük", "Kilis", "Osmaniye", "Düzce"];
?>
<div> 
<form>
    <label for="iller">Şehri Seçiniz: </label>
    <?php
        echo "<select name='il_id'>";
            for($i=0;$i<=80;$i++)
                {echo "<option value='",$i,"'>",$il[$i],"</option>";
            }
        echo "</select>";
    ?>
    <button type="submit" class="btn btn-success">Göster</button>
</form>
 
</div>
<div class="conteiner">
    

<?php
    $il_id=0;
    if (isset($_GET['il_id'])) {$il_id=$_GET['il_id'];}
    //echo $il_id;

    $i=$il_id+1;
    //echo $i;
    $j=$i-1;
        switch ($i) {
            case 1:case 7:case 15:case 31:case 32:case 33:case 46:case 80:
                if ($i<=9){echo "Seçilen il $il[$j] plakası 0$i -- Bölgesi ise Akdeniz Bölgesidir.";
                }else{echo "Seçilen il $il[$j] plakası $i -- Bölgesi ise Akdeniz Bölgesidir.";}
                $b=1;
                break;
            case 4:case 12:case 13:case 23:case 24:case 25:case 30:case 36:case 44:case 49:case 62:
            case 65:case 75:case 76:
                if ($i<=9){echo "Seçilen il $il[$j] plakası 0$i -- Bölgesi ise Doğu Anadolu Bölgesidir.";
                }else{echo "Seçilen il $il[$j] plakası $i -- Bölgesi ise Doğu Anadolu Bölgesidir.";}
                $b=2;
                break;
            case 2:case 21:case 27:case 47:case 56:case 63:case 72:case 73:case 79:
                if ($i<=9){echo "Seçilen il $il[$j] plakası 0$i -- Bölgesi ise Güneydoğu Anadolu Bölgesidir.";
                }else{echo "Seçilen il $il[$j] plakası $i -- Bölgesi ise Güneydoğu Anadolu Bölgesidir.";}
                $b=3;
                break;
            case 10:case 11:case 16:case 17:case 22:case 34:case 39:case 41:case 54:case 59:case 77:
                if ($i<=9){echo "Seçilen il $il[$j] plakası 0$i -- Bölgesi ise Marmara Bölgesidir.";
                }else{echo "Seçilen il $il[$j] plakası $i -- Bölgesi ise Marmara Bölgesidir.";}
                $b=4;
                break;
            case 3:case 9:case 20:case 35:case 43:case 45:case 48:case 64:
                if ($i<=9){echo "Seçilen il $il[$j] plakası 0$i -- Bölgesi ise Ege Bölgesidir.";
                }else{echo "Seçilen il $il[$j] plakası $i -- Bölgesi ise Ege Bölgesidir.";}
                $b=5;
                break;
            case 6:case 18:case 26:case 38:case 40:case 42:case 50:case 51:case 58:case 66:case 68:
            case 70:case 71:
                if ($i<=9){echo "Seçilen il $il[$j] plakası 0$i -- Bölgesi ise İç Anadolu Bölgesidir.";
                }else{echo "Seçilen il $il[$j] plakası $i -- Bölgesi ise İç Anadolu Bölgesidir.";}
                $b=6;
                break;
            case 5:case 8:case 14:case 19:case 28:case 29:case 37:case 52:case 53:case 55:case 57:
            case 60:case 61:case 67:case 69:case 74:case 78:case 81:
                if ($i<=9){echo "Seçilen il $il[$j] plakası 0$i -- Bölgesi ise Karadeniz Bölgesidir.";
                }else{echo "Seçilen il $il[$j] plakası $i -- Bölgesi ise Karadeniz Bölgesidir.";}
                $b=7;
                break;
            }
?>
</div>
<div class="conteiner">
    <img src="<?php echo $b.".png";?>" width="50%" height="50%"/>
</div>
</body>
</html>