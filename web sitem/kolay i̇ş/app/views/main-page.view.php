<?php
include "partials/head.php";
include "partials/nav.php";

?>


<div class="container layout">

  <aside class="sidebar px-1 d-none d-lg-block">
    <ul class="list-unstyled mb-0 pb-3 pb-md-2 pe-lg-2">
      <li class="py-2">
        <strong>Ülke / Şehir / İlçe</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <select class="form-select">
              <option value="" selected>Bir ülke seçiniz</option>
              <option value="">Türkiye</option>
              <option value="">Kıbrıs</option>
              <option value="">Yurt Dışı</option>
            </select>
          </li>
          <li class="py-1">
            <select class="form-select">
              <option value="" selected>Bir şehir seçiniz</option>
              <option value="">İstanbul</option>
              <option value="">Tekirdağ</option>
              <option value="">Manisa</option>
            </select>
          </li>
          <li class="py-1">
            <select class="form-select">
              <option value="" selected>Bir ilçe seçiniz</option>
              <option value="">Beşişktaş</option>
              <option value="">şişli</option>
            </select>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Uzaktan Çalışma</a>
          </li>
        </ul>
      </li>
      <li class="py-2">
        <strong>İlan Tarihi</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox" class="form-check-input">
            <a>Bugünün ilanları</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Son 3 saat</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Son 8 saat</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Son 3 gün</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Son 7 gün</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Son 15 gün</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Tümü</a>
          </li>
        </ul>
      </li>
      <li class="py-2">
        <strong>Sektör</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox">
            <a>Taşımacılık</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Ev işleri</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Tekstil</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Aşçılık</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Boyacılık</a>
          </li>

        </ul>
      </li>
      <li class="py-2">
        <strong>Pozisyon</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox">
            <a>Üst düzey yönetici</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Orta düzey yönetici</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Yönetici adayı</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Uzman</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Uzman yardımcısı</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Yeni başlayan</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Serbest / Freelancer</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Stajyer</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Hizmet personeli</a>
          </li>
        </ul>
      </li>
      <li class="py-2">
        <strong>Departman</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox">
            <a>AR-GE</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Bilgi işlem</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Depo / Antrepo</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Haberleşme</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Halka ilişkiler</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Hukuku</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>İdari işler</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>İnasan kaynakları</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>İş geliştirme</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>İthalat / İhracat</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Kalite</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Lojistik</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Mimarlık</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Muhasebe</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Mühendislik</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Müşteri hizmetleri</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Planlama</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Pazarlama</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Reklam</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Satınalma</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Teknikerlik</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Turizm</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Üretim / imalat</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Finans</a>
          </li>

        </ul>
      </li>
      <li class="py-2">
        <strong>Çalışma Şekli</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox">
            <a>Sürekli / Tam zamanlı</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Part Time / Yarı zamanlı</a>
          </li>
          <li class="py-1"> <input type="checkbox">
            <a>Döenmsel / Proje bazlı</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Stajyer</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Serbest zamanlı</a>
          </li>

        </ul>
      </li>
      <li class="py-2">
        <strong>Eğitim Seviyesi</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox">
            <a>Doktora - Mezun</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Doktora - Öğrenci</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Yüksek Lisans - Mezun</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Yüksek Lisans - Öğrenci</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Lisans - Mezun</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Lisans - Öğrenci</a>
          </li>
          <li class="py-1"><input type="checkbox">
            <a>Ön Lisans - Mezun</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Ön Lisans - Öğrenci</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Lise - Mezun</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Lise - Öğrenci</a>
          </li>
        </ul>
      </li>
      <li class="py-2">
        <strong>Pozisyon</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox">
            <a>Muhasebe Uzmanı</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Satış Danışmanı</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Müşteri Temsilcisi</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Satış Temsilcisi</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Yazılım Uzmanı</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Mağza Müdürü</a>
          </li>
        </ul>
      </li>
      <li class="py-2">
        <strong>Deneyim</strong>
        <ul class="list-unstyled fw-normal pb-2 small">
          <li class="py-1">
            <input type="checkbox">
            <a>Tümü</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Deneyimli</a>
          </li>
          <li class="py-1">
            <input type="checkbox">
            <a>Deneyimsiz</a>
          </li>

        </ul>
      </li>
    </ul>
  </aside>

  <main class="main" data-bs-theme="dark">
    <div class="border rounded border-2 text-bg-dark border-success my-3">
      <div class="m-3">
        <div class="d-flex justify-content-between align-items-center">
          <span class="fs-2 fw-semibold">İş Adı</span>
          <span class="">01/01/2023</span>
        </div>

        <span class="d-block">İstanbul</span>
        <div class="border-bottom my-2 border-dark-subtle"></div>
        <div class="my-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil iusto tempora iure qui amet
            veniam dolor molestias repudiandae, rem magnam ipsam alias consectetur ipsum voluptates itaque suscipit
            numquam veritatis.
            Delectus porro nihil eaque dignissimos quidem deserunt error possimus debitis reiciendis, magni commodi
            enim rem quod odio voluptatem laborum fuga, hic id? Illum eaque nihil eius suscipit commodi accusantium
            sequi.
            Perspiciatis dolore facere, quisquam corporis itaque earum et sapiente voluptatibus asperiores hic
            perferendis doloribus mollitia vitae quod enim amet ipsa rem ex illo aliquam? Quis distinctio harum vel
            nobis quasi.</p>
          <div class="d-flex flex-row-reverse">
            <button class="btn btn-success px-4">Başvur</button>
          </div>
        </div>
      </div>
    </div>
    <div class="border rounded border-2 text-bg-dark border-success my-3">
      <div class="m-3">
        <div class="d-flex justify-content-between align-items-center">
          <span class="fs-2 fw-semibold">İş Adı</span>
          <span class="">01/01/2023</span>
        </div>

        <span class="d-block">İstanbul</span>
        <div class="border-bottom my-2 border-dark-subtle"></div>
        <div class="my-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil iusto tempora iure qui amet
            veniam dolor molestias repudiandae, rem magnam ipsam alias consectetur ipsum voluptates itaque suscipit
            numquam veritatis.
            Delectus porro nihil eaque dignissimos quidem deserunt error possimus debitis reiciendis, magni commodi
            enim rem quod odio voluptatem laborum fuga, hic id? Illum eaque nihil eius suscipit commodi accusantium
            sequi.
            Perspiciatis dolore facere, quisquam corporis itaque earum et sapiente voluptatibus asperiores hic
            perferendis doloribus mollitia vitae quod enim amet ipsa rem ex illo aliquam? Quis distinctio harum vel
            nobis quasi.</p>
          <div class="d-flex flex-row-reverse">
            <button class="btn btn-success px-4">Başvur</button>
          </div>
        </div>
      </div>
    </div>
    <div class="border rounded border-2 text-bg-dark border-success my-3">
      <div class="m-3">
        <div class="d-flex justify-content-between align-items-center">
          <span class="fs-2 fw-semibold">İş Adı</span>
          <span class="">01/01/2023</span>
        </div>

        <span class="d-block">İstanbul</span>
        <div class="border-bottom my-2 border-dark-subtle"></div>
        <div class="my-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet nihil iusto tempora iure qui amet
            veniam dolor molestias repudiandae, rem magnam ipsam alias consectetur ipsum voluptates itaque suscipit
            numquam veritatis.
            Delectus porro nihil eaque dignissimos quidem deserunt error possimus debitis reiciendis, magni commodi
            enim rem quod odio voluptatem laborum fuga, hic id? Illum eaque nihil eius suscipit commodi accusantium
            sequi.
            Perspiciatis dolore facere, quisquam corporis itaque earum et sapiente voluptatibus asperiores hic
            perferendis doloribus mollitia vitae quod enim amet ipsa rem ex illo aliquam? Quis distinctio harum vel
            nobis quasi.</p>
          <div class="d-flex flex-row-reverse">
            <button class="btn btn-success px-4">Başvur</button>
          </div>
        </div>
      </div>
    </div>


  </main>
</div>


<script defer>
  let checkedBoxes = document.querySelectorAll('input[type=checkbox]');
  checkedBoxes.forEach(function(e) {
    e.classList.add("form-check-input");

  })
</script>


<?php
include "partials/footer.php";
?>