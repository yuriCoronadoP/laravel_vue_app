<template>
    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h1>Componente <span class="badge bg-secondary">CONTACTO</span></h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 d-flex">
                <div class="card flex-fill flex-row">
                <div class="card-body align-self-center">
                    <h5 class="card-title">Yuriria Coronado Perez</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Cd. Victoria, Tams</h6>
                    <p class="card-text">yuricoronadop@gmail.com</p>
                    <p class="card-text">834 143 7535</p>
                    <!-- <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a> -->
                </div>
                </div>
            </div>
            <div class="col-6">
                <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</template>