<?php include '../toprak/head.html';?>
<?php include '../toprak/header.html';?>
<div class="ortala" gnl="24p">
<div class="beri-alt-1" gnl="23">
  <h1>Kap Örgüsü</h1>
  <h2>Kap Örgüsü Nedir?</h2>
  <p>Bir sayfanın içinde genişlikler belirleme örgüsüne kap örgüsü denir. Kap kelimesi genelde bir şeyi bir arada tutmaya yarayan fiziksel nesneler için kullanılır. Buradan yola çıkarak anlamını kodlama dünyasına yansıtabilirsiniz. Kap örgüsü İngilizce dilinde "grid system" diye anılmaktadır. Deveb çatısı altında bu örgü kendine özgü kullanımı ile diğer önyüz iskeletlerindeki kap örgülerinden farklıdır ve benzer yönleri de kapsamaktadır. Ayrıntılarıyla öğrenmenizi tavsiye ederiz.</p>

  <h2>Konular</h2>
  <div class="kap" gnl="24">
    <div gnl="1o">    <div class="kutu kutu-genel metin-olumlu">      Ana Yapı    </div>  </div>
    <div gnl="1o">    <div class="kutu kutu-genel metin-olumlu">      Kavramlar    </div>  </div>
    <div gnl="1o">    <div class="kutu kutu-genel metin-olumlu">      Özellikler    </div>  </div>
    <div gnl="1o">    <div class="kutu kutu-genel metin-olumlu">      Bilinmesi Gerekenler    </div>  </div>
    <div gnl="1o">    <div class="kutu kutu-genel metin-olumlu">      Örnekler    </div>  </div>
  </div>


<div class="">
  <div class="beri-üst-1 beri-alt-1">
  <h2>Ana Yapı</h2>
  <p>Kap örgüsünün ana yapısı üç ana yöntemden oluşmaktadır. Bölme yöntemi, parça yöntemi, oran yöntemi isimleriyle ayırdığımız bu yöntemler hakkında ayrıntılı bilgiyi bu belgede okuyabilirsiniz.</p>
  </div>
  <div class="beri-üst-1 beri-alt-1" gnl="24">
    <h3>Bölme Yöntemi</h3>
    <p>Bir genişliği eşit ölçülerde bölmek istiyorsak bölme yöntemini kullanırız. Bu yöntemi kullanmak çok basittir. Temel mantığımız ana etikete bölmek istediğimiz kadar değeri örnek:"2p" şeklinde ekran ölçeklerine yazarız. Yavru etikete ise "1" değerini yazarız. Bundan sonra "1" değerini ekran ölçeklerine yazarak oluşturduğunuz etiket başta belirtiğiniz değere göre eşit olarak bölünecektir. Aşağıdaki örnekte 5 bölmeden oluşan bir kap yapısı oluşturuldu. Bunun için kap örgüsünde şu sınıf yazılır; <span class="metin-olumlu">gnl="</span><span class="metin-belirsiz">5 5p</span><span class="metin-olumlu">"</span><br><br> Yavru sınıflarda <span class="metin-olumlu">gnl="</span><span class="metin-belirsiz">1</span><span class="metin-olumlu">"</span> doğru şekilde tanımlandıysa bu sınıfın olduğu etiket ana etikette belirtilen bölme değerine göre genişlik değeri alacaktır. Örnekte görüldüğü gibi.</p>
    <iframe gnl="1 2p" height="300" src="//jsfiddle.net/deveb/dshjqLjn/embedded/html/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
    <iframe gnl="1 2p" height="300" src="//jsfiddle.net/deveb/dshjqLjn/embedded/result/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>

  </div>
  <div class="beri-üst-1 beri-alt-1" gnl="24">
    <h3>Parça Yöntemi</h3>
    <p>Bulunduğu genişliği parçalara ayırarak kullanma yöntemidir. 24 farklı parça aralığı varsayılan olarak ayarlanmıştır. 1p, 2p, 3p, 4p, 5p, 6p, 8p, 7p, 8p, 9p, 10p, 11p, 12p, 13p, 14p, 15p, 16p, 17p, 18p, 19p, 20p, 21p, 22p, 23p, 24p olarak istediğiniz ekran ölçeğinde (gnl, byk, ort, ufk) kullanabilirsiniz. Örneğin 10p parça aralığını kullanacaksanız genişliği 10 eşit parçaların toplamına kadar kullanmak istediğinizi anlarız. Bununla birlikte farklı parça aralıklarını bir arada kullanabilme özelliği vardır. Buradan anlamanızı beklediğimiz, HTML dosyasının bir bölümünde 10p kullanıyorken, diğer bir bölümünde 16p kullanabilirsiniz.</p>
    <h4 class="beri-alt-1 beri-üst-1">Kullanımı</h4>
    <p>Kap örgüsü ile ilgili bir işlem yapacağınız zaman gnl="" ekran tipinde ölçek her zaman belirtilmelidir. Bir genişliği tüm ekran ölçeklerinde 24 parçaya ayırarak kullanmak için sınıfı şöyle yazmalısınız;<span class="metin-olumlu">gnl="</span><span class="metin-belirsiz">24 24p</span><span class="metin-olumlu">"</span>. Böyle yazdığınız zaman bulunduğu genişliği baştan sonra kadar kaplayacaktır. Eğer 24 parçanın yarısı kadar kaplamak istiyorsanız; <span class="metin-olumlu">gnl="</span><span class="metin-belirsiz">12 24p</span><span class="metin-olumlu">"</span> veya <span class="metin-olumlu">gnl="</span><span class="metin-belirsiz">24p 12</span><span class="metin-olumlu">"</span> şeklinde yazmanız gerekmektedir. Buradan yola çıkarak diğer parça aralıklarını kullanabilirsiniz.</p>
    <iframe gnl="1 2p" height="300" src="//jsfiddle.net/deveb/2wa4s4jf/embedded/html/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
    <iframe gnl="1 2p" height="300" src="//jsfiddle.net/deveb/2wa4s4jf/embedded/result/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
  </div>
  <div class="beri-üst-1 beri-alt-1" gnl="24">
    <h3>Oran Yöntemi</h3>
    <p>Bir genişlikte birbirlerinin katları olacak şekilde oranlar kurabilirsiniz. Örneğin 1 3 1 oranında bir düzen yazabilirsiniz. Oran yöntemini <span class="metin-olumlu">gnl="</span><span class="metin-belirsiz">1o</span><span class="metin-olumlu">"</span> şeklinde yazarak kullanabilirsiniz</p>
    <iframe gnl="1 2p" height="300" src="//jsfiddle.net/deveb/hsr989pz/embedded/html/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
    <iframe gnl="1 2p" height="300" src="//jsfiddle.net/deveb/hsr989pz/embedded/result/" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
  </div>
</div>

  <h2>Kavramlar</h2>
  <h3>Ekran Çeşitleri</h3>
  <p>Ekran çeşitleri denildiğinde aklınıza gelmesi gereken ekranın fiziksel ölçeklerine uygun çözünürlük değerleridir.
  Bu değerler belli başlı isimlerle sınıflandırılmış ve isimlendirilmiştir. Bu isimleri şöyle sıralayabiliriz; genel, kocaman, dev, büyük, orta, küçük, ufak, minik. Ancak Deveb Önyüz İskeleti genel, büyük, orta, küçük, ufak isimlerini varsayılan ayarlarında destekleyerek gelir.
Her bir ismin kısaltılmış yazılışları vardır.</p>


<table class="tablo gnl-5-5p">
  <thead>
    <tr>
      <th>Ekran Çeşitleri</th>
      <th>Genel</th>
      <th>Ufak</th>
      <th>Orta</th>
      <th>Büyük</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Kap Davranışları</th>
      <td colspan="8">Her zaman ayarlanabilir olarak yazılır.</td>
    </tr>
    <tr>
      <th>Sınıf önekleri</th>
      <td>gnl<br><span class="metin-olumlu">telefon ve daha büyük</span> </td>
      <td>ufk<br><span class="metin-olumlu">tablet ve daha büyük</span></td>
      <td>ort<br><span class="metin-olumlu">dizüstü ve daha büyük</span></td>
      <td>byk<br><span class="metin-olumlu">büyük ekranlar</span></td>
    </tr>
    <tr>
      <th>Oran Ölçekleri</th>
      <td colspan="8">0 ~ 24 oranlarında ölçekleme (hazırlanıyor)</td>
    </tr>
    <tr>
      <th>Bölme Ölçekleri</th>
      <td colspan="8">1 ~ 24 parçaya eşit genişlikte ölçekleme</td>
    </tr>
    <tr>
      <th>Parça Ölçekleri</th>
      <td colspan="8">1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24 parça boyu olmak üzere 24 farklı ölçekleme</td>
    </tr>
  </tbody>
</table>
</div>
</div>


<?php include '../toprak/foot.html';?>
