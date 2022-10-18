@extends('website.master')

@section('title')
    Contact Us
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-light">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-dark">Contact Us </h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 m">
                    <div class="card card-body border-0 h-100 shadow">
                        <h3 class="text-center">Send Us Message</h3>
                        <hr/>
                        <form action="">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label class="col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="Email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="row mb-3 ">
                                <label class="col-md-3">Massage</label>
                                <div class="col-md-9">
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Contact"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 ">
                    <div class="card card-body border-0 h-100 shadow">
                        <h4>Emergency Contact</h4>
                        <hr/>
                        <br>
                        <address>
                            House # 420, Road #, 40,Adabor<br/> Mohammadpur, Dhaka.<br/>
                            <b>Phone:</b>
                            <br/>01712143433, 01712143433 <br/>
                            <b>Email:</b><br/>
                            info@gmail.com
                        </address>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card card-body border-0 shadow">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d77984.7394918735!2d90.32308556327213!3d23.768440499370772!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sbn!2sbd!4v1662530340045!5m2!1sbn!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

