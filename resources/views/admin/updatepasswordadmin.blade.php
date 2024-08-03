@extends('templatesadmin')
@section('content')


<div class="container">
    <div class="d-flex justify-content-end">
    </div>
    <br><br>
        <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Password </h4> 
                    {{-- {{$user->usertype}} --}}
                </div>
                <div class="card-body">
                    <div class="basic-form">
                <!-- resources/views/upload.blade.php -->
                <form action="{{ route('admin_postupdate') }}" method="POST" enctype="multipart/form-data" id="passwordForm">
                    @csrf

                    <input type="hidden" name="id" value="{{ $user->id }}">

                    <div class="form-group">
                        <label for="password">Masukan Password Baru</label>
                        <input type="password" class="form-control input-default" placeholder="Password" name="password" id="password"  >

                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Masukan Ulang Password Baru</label>
                        <input type="password" class="form-control input-default" placeholder="Verify Password" name="verify_password" id="verify_password" >
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Pilih Role User</label>
                    <select name="usertype" id="usertype" class="form-control">
                        <option value="">pilih</option>
                        <option value="admin">Admin</option>
                        <option value="up3bjm">UP3 BJM</option>
                        <option value="up3brb">UP3 BRB</option>
                        <option value="up3kps">UP3 KPS</option>
                        <option value="up3ktb">UP3 KTB</option>
                        <option value="up3pbun">UP3 PBUN</option>
                        <option value="up3pky">UP3 PKY</option>
                        <option value="bsi">BANK BSI</option>
                        <option value="bni">BANK BNI</option>
                        <option value="bri">BANK BRI</option>
                        <option value="mandiri">BANK Mandiri</option>
                        <option value="kalsel">BANK Kalsel</option>
                        <option value="kalteng">BANK Kalteng</option>
                    </select>
                </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<script>
       document.getElementById('passwordForm').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('verify_password').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                alert('Passwords Tidak Sama.');
            }
        });

</script>

@endsection