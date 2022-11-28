
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration Vendor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="regform.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto&display=swap" rel="stylesheet" />
  </head>
  <body>
    <section class="h-100" style="background-color: #fb8633">
      <form action="register_action.php" method="post" class="needs-validation" novalidate>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="assets/img/bg_8.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem" />
                  </div>

                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Vendor Registration Form</h3>

                      <div class="form-floating mb-3">
                        <select class="form-select" id="tipe_vendor" aria-label="Floating label select example" name="tipe_vendor">
                          <option selected disabled value="">- Pilih Tipe Vendor-</option>
                          <option value="non_perorangan">Non-perorangan</option>
                          <option value="perorangan">Perorangan</option>
                          <option value="luar_negeri">Luar Negeri</option>
                        </select>
                        <label for="floatingSelect">Tipe Vendor</label>
                        <div class="invalid-feedback">Pilih tipe vendor!</div>
                      </div>

                      <div class="form-floating mb-3">
                        <select class="form-select" id="kewarganegaraan" aria-label="Floating label select example" name="kewarganegaraan">
                          <option selected disabled value="">- Pilih Kewarganegaraan -</option>
                          <option value="wni">Warga Negara Indonesia (WNI)</option>
                          <option value="wna">Warga Negara Asing (WNA)</option>
                        </select>
                        <label for="floatingSelect">Kewarganegaraan</label>
                      </div>

                      <div class="form-floating mb-3">
                        <select class="form-select" id="tipe_instansi" aria-label="Floating label select example" name="tipe_instansi">
                          <option selected disabled value="">- Pilih Tipe intansi -</option>
                          <option value="pt">PT</option>
                          <option value="cv">CV</option>
                          <option value="koperasi">Koperasi</option>
                          <option value="but">BUT (Badan Usaha Terbatas)</option>
                          <option value="sekolah">Sekolah / Universitas</option>
                          <option value="yayasan">Yayasan</option>
                          <option value="firma_hukum">Firma Hukum</option>
                          <option value="kjpp">KJPP (Kantor Jasa Penilai Publik</option>
                          <option value="kap">KAP (Kantor Akutan Publik)</option>
                          <option value="bumdes">BUMDES (Badan Usaha Milik Desa)</option>
                          <option value="lainnya">Lainnya</option>
                        </select>
                        <label for="floatingSelect">Tipe intansi</label>
                      </div>

                      <div class="form-floating mb-3">
                        <select class="form-select" id="profesi" aria-label="Floating label select example" name="profesi">
                          <option selected disabled value="">- Pilih Profesi -</option>
                          <option value="konsultan">Konsultan</option>
                          <option value="notaris">Notaris</option>
                          <option value="pengacara">Pengacara</option>
                          <option value="mandor">Mandor</option>
                          <option value="lainnya">Lainnya</option>
                        </select>
                        <label for="floatingSelect">Profesi</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required />
                        <label for="floatingInput">Alamat Email / Email Address</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input
                          type="text"
                          class="form-control"
                          id="floatingPassword"
                          name="phone_number"
                          placeholder="Phone Number"
                          maxlength="15"
                          oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                          required
                        />
                        <label for="floatingPassword">Nomor Telepon / Phone Number</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="tax_id" name="tax_id" placeholder="Nomor NPWP" maxlength="13" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required />
                        <label for="floatingPassword">Nomor NPWP / Tax ID</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required />
                        <label for="floatingPassword">Password</label>
                      </div>

                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirm Password" required />
                        <label for="floatingPassword">Confirm Password</label>
                      </div>

                      <div class="mb-3">
                        <label for="formFileLg" class="form-label">Dokumen NPWP / Tax ID Document</label>
                        <input class="form-control form-control-lg" id="formFileLg" name="file_tax_id" type="file" required />
                      </div>

                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
                          <label class="form-check-label" for="invalidCheck"> Agree to terms and conditions </label>
                          <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                      </div>

                      <div class="d-flex justify-content-end pt-3">
                        <input type="hidden" name="register" value="1">
                        <button type="submit" class="btn btn-lg ms-2" style="background-color: #fb8633">Sign Up</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
      $(function () {
        $("#tipe_instansi").hide();
        $("#kewarganegaraan").hide();
        $("#profesi").hide();
        $("#tipe_vendor").change(function () {
          if ($("#tipe_vendor").val() == "non_perorangan") {
            $("#tipe_instansi").show();
            $("#kewarganegaraan").hide();
            $("#profesi").hide();
          } else if ($("#tipe_vendor").val() == "perorangan") {
            $("#tipe_instansi").hide();
            $("#kewarganegaraan").show();
            $("#profesi").show();
          } else {
            $("#tipe_instansi").hide();
            $("#kewarganegaraan").hide();
            $("#profesi").hide();
          }
        });
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
      (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
          form.addEventListener(
            "submit",
            (event) => {
              if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
              }

              form.classList.add("was-validated");
            },
            false
          );
        });
      })();
    </script>
  </body>
</html>
