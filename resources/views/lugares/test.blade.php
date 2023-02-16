
<form action={{route('contact')}} method="POST">
    {{ csrf_field() }}>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <h1>Contacto</h1>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 right">
            <div class="form-group">
                <input name="name" type="text" class="form-control form-control-lg" placeholder="Your Name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-lg" placeholder="YourEmail@email.com"
                    name="email">
            </div>
            <div class="form-group">
                <textarea class="form-control form-control-lg">

            </textarea>
            </div>
            <input type="submit" class="btn btn-secondary btn-block" value="Enviar" name="">
        </div>
    </div>
</form>
