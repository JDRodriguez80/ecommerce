<div class="content">
    <div class="container">
        <div class="card">
            <form method="post" class="needs-validation" novalidate>
                <div class="card-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 text-center text-lg-left mt-lg-3">
                                <h4>Agregar administrador</h4>
                            </div>
                            <div class="col-12 col-lg-6 mt-2 d-none d-lg-block">
                                <button type="submit" class="btn border-0 templateColor float-right py-2 px-3 btn-sm rounded-pill">Guardar Información</button>
                                <a href="/admin/administradores " class="btn btn-default float-right py-2 px-3 btn-sm rounded-pill mr-2 ">Regresar</a>
                            </div>
                            <div class="col-12  mt-2 text-center justify-content-center d-flex d-block d-lg-none">
                                <div><a href="/admin/administradores " class="btn btn-default  py-2 px-3 btn-sm rounded-pill mr-2 ">Regresar</a></div>
                                <div><button type="submit" class="btn border-0 templateColor py-2 px-3 btn-sm rounded-pill">Guardar Información</button></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2 ">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group pb-3">
                                        <label for="name-admin">Nombre <sup class="text-danger font-weight-bold">*</sup></label>
                                        <input type="text" class="form-control" placeholder="Ingresar nombre" id="name_admin" name="name_admin" required>
                                        <div class="valid-feedback">Válido</div>
                                        <div class="invalid-feedback">este campo es obligatorio, favor de rellenarlo</div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="rol_admin">Rol <sup class="text-danger font-weight-bold">*</sup></label>
                                        <select name="rol_admin" id="rol_admin" class="form-control" required>
                                            <option value="">Elegir rol</option>
                                            <option value="admin">Administrador</option>
                                            <option value="editor">Editor</option>
                                        </select>
                                        <div class="valid-feedback">Válido</div>
                                        <div class="invalid-feedback">este campo es obligatorio, favor de rellenarlo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col pl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group pb-3">
                                        <label for="email-admin">Correo <sup class="text-danger font-weight-bold">*</sup></label>
                                        <input type="email" class="form-control" placeholder="Ingresar correo" id="email_admin" name="email_admin" required>
                                        <div class="valid-feedback">Válido</div>
                                        <div class="invalid-feedback">este campo es obligatorio, favor de rellenarlo</div>
                                    </div>
                                    <div class="form-group pb-3">
                                        <label for="password-admin">Contraseña <sup class="text-danger font-weight-bold">*</sup></label>
                                        <input type="password" class="form-control" placeholder="Ingresar contraseña" id="password_admin" name="password_admin" required>
                                        <div class="valid-feedback">Válido</div>
                                        <div class="invalid-feedback">este campo es obligatorio, favor de rellenarlo</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 text-center text-lg-left">
                                <label class="font-weight-light"><sup class="text-danger font-weight-bold">*</sup>Campos Obligatorios</label>
                            </div>
                            <div class="col-12 col-lg-6 mt-2 d-none d-lg-block">
                                <button type="submit" class="btn border-0 templateColor float-right py-2 px-3 btn-sm rounded-pill">Guardar Información</button>
                                <a href="/admin/administradores " class="btn btn-default float-right py-2 px-3 btn-sm rounded-pill mr-2 ">Regresar</a>
                            </div>
                            <div class="col-12  mt-2 text-center justify-content-center d-flex d-block d-lg-none">
                                <div><a href="/admin/administradores " class="btn btn-default  py-2 px-3 btn-sm rounded-pill mr-2 ">Regresar</a></div>
                                <div><button type="submit" class="btn border-0 templateColor py-2 px-3 btn-sm rounded-pill">Guardar Información</button></div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>