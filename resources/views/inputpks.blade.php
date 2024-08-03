@extends('templates')

@section('header')
PKS Conkee
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Pelanggan PKS Conkee </h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form id="pksform" action="{{ route('pks.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                        <!-- <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="col-form-label">
                            </div>
                        </div> -->

                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">UP3</label>
                                        <div class="col-sm-10">
                                            <select class="me-sm-2 default-select" name="up3" id="up3">
                                            <option value="">Pilih</option>
                                                <option value="up3_banjarmasin">UP3 Banjarmasin</option>
                                                <option value="up3_kotabaru">UP3 Kotabaru</option>
                                                <option value="up3_barabai">UP3 Barabai</option>
                                                <option value="up3_palangka">UP3 Palangka Raya</option>
                                                <option value="up3_pangkalanbun">UP3 Pangkalanbun</option>
                                                <option value="up3_kapuas">UP3 Kuala Kapuas</option>
                                            </select>
                                        </div>
                        </div>

                        <?php
                        // $currentDate = date('dmY');

                        // // Generate four random digits
                        // $randomNumbers = mt_rand(1000, 9999);
                        
                        // // Combine the current date with the random numbers to form the agenda value
                        // $agenda = $currentDate . $randomNumbers;
                        // echo $agenda
                        ?>
                        <input type="hidden" name="agenda" id="agenda" value="">


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Langganan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" placeholder="Nama Langganan" name="nama_langganan" id="nama_langganan">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama Pemohon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" placeholder="Nama Pemohon" name="nama_pemohon" id="nama_pemohon">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No HP Pemohon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" placeholder="No HP Pemohon" name="no_hp" id="no_hp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No KTP Pemohon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" placeholder="No KTP Pemohon" name="no_ktp" id="no_ktp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">No NPWP Pemohon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" placeholder="No NPWP Pemohon" name="no_npwp" id="no_npwp">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Langganan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" placeholder="Alamat Langganan" name="alamat" id="alamat">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Detil Permohonan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-default" placeholder="sampaikan jumlah bangunan & jumlah daya, misal :10 rumah daya 1.300 VA, 50 rumah daya 900 VA" name="detil" id="detil">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Jenis Permohonan</label>
                                <div class="col-sm-10">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3">
                                                    <input type="checkbox" class="form-check-input" id="customCheckBox2" value="biaya_penyambungan_kwh_meter_+_token_perdana" name="jenis_permohonan1" id="jenis_permohonan0">
                                                    <label class="form-check-label" for="customCheckBox1">Biaya Penyambungan kWh Meter + Token Perdana</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-info">
                                                    <input type="checkbox" class="form-check-input"  id="customCheckBox2" value="nidi_s.d_slo" name="jenis_permohonan2" id="jenis_permohonan1">
                                                    <label class="form-check-label" for="customCheckBox2">NIDI s/d SLO</label>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-xxl-6 col-6">
                                                <div class="form-check custom-checkbox mb-3 checkbox-info">
                                                    <input type="checkbox" class="form-check-input"  id="customCheckBox2" value="iconnet" name="jenis_permohonan3" id="jenis_permohonan3">
                                                    <label class="form-check-label" for="customCheckBox2">ICONNET</label>
                                                </div>
                                            </div>

                                            <input type="hidden" name="jenis_permohonan">
                                            <div id="jenis_permohonanError" class="text-danger"></div>

                                        </div>
                                    </div>      
                                </div>
                            </div>

                           
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bank 1</label>
                                            <div class="col-sm-10">
                                                <select class="me-sm-2 form-select"  name="bank1" id="bank1">
                                                <option value="">Pilih</option>
                                                    <option value="bsi">Bank BSI</option>
                                                    <option value="mandiri">Bank Mandiri</option>
                                                    <option value="bri">Bank BRI</option>
                                                    <option value="kalsel">Bank Kalsel</option>
                                                    <option value="kalteng">Bank Kalteng</option>
                                                    <option value="bni">Bank BNI</option>
                                                </select>
                                            </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bank 2</label>
                                            <div class="col-sm-10">
                                                <select class="me-sm-2 form-select" name="bank2" id="bank2" onchange="checkBank2()">
                                                    <option value="">Pilih</option>
                                                    <option value="bsi">Bank BSI</option>
                                                    <option value="mandiri">Bank Mandiri</option>
                                                    <option value="bri">Bank BRI</option>
                                                    <option value="kalsel">Bank Kalsel</option>
                                                    <option value="kalteng">Bank Kalteng</option>
                                                    <option value="bni">Bank BNI</option>
                                                </select>
                                            </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Bank 3</label>
                                            <div class="col-sm-10">
                                                <select class="me-sm-2 form-select" name="bank3" id="bank3" onchange="checkBank3()">
                                                    <option value="">Pilih</option>
                                                    <option value="bsi">Bank BSI</option>
                                                    <option value="mandiri">Bank Mandiri</option>
                                                    <option value="bri">Bank BRI</option>
                                                    <option value="kalsel">Bank Kalsel</option>
                                                    <option value="kalteng">Bank Kalteng</option>
                                                    <option value="bni">Bank BNI</option>
                                                </select>
                                            </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pilih Jenis Rekening</label>
                                            <div class="col-sm-10">
                                                <select class="me-sm-2 form-select" id="inlineFormCustomSelect" name="jenis_rekening" id="jenis_rekening">
                                                    <option>Pilih</option>
                                                    <option value="tabungan_biasa">Tabungan Biasa</option>
                                                    <option value="tabungan_bisnis">Tabungan Bisnis</option>
                                                </select>
                                            </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Pilih Nama Rekening</label>
                                            <div class="col-sm-10">
                                                <select class="me-sm-2 form-select" id="inlineFormCustomSelect" name="nama_rekening" id="nama_rekening">
                                                    <option>Pilih</option>
                                                    <option value="perorangan">Perorangan</option>
                                                    <option value="perusahaan">Perusahaan</option>
                                                    <option value="perusahaan_konstruksi_ditunjuk">Perusahaan Konstruksi yang ditunjuk</option>
                                                </select>
                                            </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Tanda Tangan Digital</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="ttd" name="ttd" data-allow-empty="true" onchange="validateImageFile()">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Stempel</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="stempel" name="stempel" data-allow-empty="true" onchange="validateImageFile()">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Undangan Probing</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="undangan_prob" name="undangan_prob" data-allow-empty="true" onchange="validateImageFile()">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Eviden Probing</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="eviden_prob" name="eviden_prob" data-allow-empty="true" onchange="validateImageFile()">
                                    </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload KTP</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" name="ktp" id="ktp" onchange="validateImageFile()">
                                    </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload NPWP</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="npwp" name="npwp" onchange="validateImageFile()">
                                    </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload NIB</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="nib" name="nib" data-allow-empty="true" onchange="validateImageFile()">
                                    </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Akta Perusahaan</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="akta_perusahaan" name="akta_perusahaan" data-allow-empty="true" onchange="validateImageFile()">
                                    </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Upload Surat Kuasa</label>
                                    <div class="col-sm-10">
                                         <input class="form-control" type="file" id="surat_kuasa" name="surat_kuasa" data-allow-empty="true" onchange="validateImageFile()">
                                    </div>
                            </div>


                            
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                            </div>
                            @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                            @endif
                                                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Get references to the checkboxes and hidden input field
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const combinedInput = document.querySelector('input[name="jenis_permohonan"]');

    // Function to update the combined input field with the selected checkbox values
    function updateCombinedCheckboxes() {
        let combinedValues = [];
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                combinedValues.push(checkbox.value);
            }
        });
        combinedInput.value = combinedValues.join(', ');
    }

    // Add event listeners to each checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateCombinedCheckboxes);
    });

    // Call the function initially to set the initial combined values
    updateCombinedCheckboxes();

//========================================FORM VALIDATION================================
        // Add event listener to the submit button
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('submit').addEventListener('click', function(event) {
                // Check if required fields are empty
                const form = document.getElementById('pksform');
                const requiredFields = ['up3','nama_langganan', 'nama_pemohon', 'no_hp', 'no_ktp', 'no_npwp', 'alamat', 'detil', 'jenis_permohonan',
                 'bank1', 'bank2','bank3', 'jenis_rekening', 'nama_rekening', 'ktp', 'npwp','ttd','stempel','undangan_prob','eviden_prob'];
                let hasEmptyField = false;

                requiredFields.forEach(field => {
                    const input = form.querySelector(`[name="${field}"]`);
                    if (!input.value.trim()) {
                        hasEmptyField = true;
                    }
                });

                if (hasEmptyField) {
                    alert('Pastikan Field wajib terisi.');
                    event.preventDefault(); // Prevent form submission
                }
            });
        });

    function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
}

    function checkBank2() {
    const bank1 = document.getElementById("bank1");
    const bank2 = document.getElementById("bank2");
    if (bank1.value === bank2.value) {
      alert("Bank 2 harus berbeda dengan bank 1");
      bank2.value = "";
    //   selectElement('bank2', '');
      bank2.options[0].selected = true;
    }
  }


  function checkBank3() {
    const bank1 = document.getElementById("bank1");
    const bank2 = document.getElementById("bank2");
    const bank3 = document.getElementById("bank3");
    if (bank1.value === bank3.value || bank2.value === bank3.value) {
      if (bank1.value === bank3.value) {
        alert("Bank 3 dan Bank 1 harus berbeda");
      } else {
        alert("Bank 2 dan Bank 3 harus berbeda");
      }
      bank3.value = "";
      bank3.options[0].selected = true;
    }
  }

  function validateImageFile() {
        const fileInput = document.getElementById('ktp');
        const file = fileInput.files[0];
        const allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        if (!allowedExtensions.exec(file.name)) {
            alert('File harus berekstensi: .jpg, .jpeg, .png, .gif');
            fileInput.value = ''; // Clear the file input field
        }
    }


    document.getElementById('up3').addEventListener('change', function() {
            // Get the selected value from the "up3" select field
            var up3Value = this.value;

            // Determine the prefix based on the selected value
            var prefix = '';
            switch (up3Value) {
                case 'up3_banjarmasin':
                    prefix = 'UP3BJM';
                    break;
                case 'up3_kotabaru':
                    prefix = 'UP3KTB';
                    break;
                case 'up3_barabai':
                    prefix = 'UP3BRB';
                    break;
                case 'up3_palangka':
                    prefix = 'UP3PLK';
                    break;
                case 'up3_pangkalanbun':
                    prefix = 'UP3PBUN';
                    break;
                case 'up3_kapuas':
                    prefix = 'UP3KPS';
                    break;
                default:
                    prefix = ''; // Default prefix if none of the above match
                    break;
            }

            // Get the current date in the format ddmmyyyy
            var currentDate = new Date();
            var day = ("0" + currentDate.getDate()).slice(-2);
            var month = ("0" + (currentDate.getMonth() + 1)).slice(-2);
            var year = currentDate.getFullYear();
            var formattedDate = day + month + year;

            // Generate four random digits
            var randomNumbers = Math.floor(1000 + Math.random() * 9000);

            // Combine the prefix, current date, and random numbers to form the agenda value
            var agenda = prefix + formattedDate + randomNumbers;

            // Set the value of the hidden input field
            document.getElementById('agenda').value = agenda;
        });
  
</script>

@endsection