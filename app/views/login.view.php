<h2 class="mt-4 mb-5 text-center">RUANG BACA JTI</h2>

<div class="container">
    <div class="card mx-auto" style="max-width: 400px;">
        <div class="card-header bg-primary text-white text-center">
            <h3>Login</h3>
        </div>

        <div class="card-body">
            <form action="<?= $loginEndpoint ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                </div>

                <button class="btn btn-primary w-100" type="submit">Masuk</button>
            </form>
        </div>
    </div>
</div>