@extends('layouts.master')
@section('title','"Elan" | TezAl')

@section('content')
    <!--=====================================-->
    <!--=        Inner Banner Start         =-->
    <!--=====================================-->
    <section class="inner-page-banner" data-bg-image="{{asset('media/banner/banner1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-area">
                        <h1>Elan</h1>
                        <ul>
                            <li>
                                <a href="{{route('index')}}">Ana səhifə</a>
                            </li>
                            <li>Elan</li>
                            <li>Yüklə</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Post Add Start    			=-->
    <!--=====================================-->
    <section class="section-padding-equal-70">
        <div class="container">
            @include('layouts.error_messages')
            <div class="post-ad-box-layout1 light-shadow-bg">
                <div class="post-ad-form light-box-content">
                    <form action="{{route('createAdvertDB')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="post-section post-type">
                            <div class="post-ad-title">
                                <i class="fas fa-tags"></i>
                                <h3 class="item-title">Elan Tipi</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Elan Tipini seçin
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="form-control select-box" name="type">
                                            <option value="0">Pulsuz</option>
                                            <option value="1">Təcili</option>
                                            <option value="2">VİP</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-section post-category">
                            <div class="post-ad-title">
                                <i class="fas fa-tags"></i>
                                <h3 class="item-title">Kategoriya</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Kateqoriya
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select name="category[]" class="form-control select-box" required="required" onchange="getAltCategory(this.value)">
                                            <option value="0">Kateqoriya seçin</option>
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row alt_category">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Alt Kateqoriya
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select name="category[]" class="form-control select-box" required="required" id="alt_category" onchange="getThirdCategory(this.value)">


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row third_category">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        3cü Kateqoriya
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group" id="third_category">



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-section post-information">
                            <div class="post-ad-title">
                                <i class="fas fa-folder-open"></i>
                                <h3 class="item-title">Elan haqqında</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Başlıq
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" id="post-title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Qiymət [€]
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="number" step="0.01" class="form-control" name="price" id="post-price">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Haqqında
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <textarea name="description" class="form-control textarea" id="description" cols="30" rows="8"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-section post-img">
                            <div class="post-ad-title">
                                <i class="far fa-image"></i>
                                <h3 class="item-title">Şəkillər</h3>
                            </div>
                            <div class="form-group">
                                <div class="img-gallery">
                                    <div class="img-upload">
                                        <div class="upload-title">Sürüştür və yüklə.</div>
                                        <a href="javascript:void (0)" class="item-btn" onclick="uploadFile()">Yüklə ...</a>
                                    </div>
                                    <div id="image_upload">

                                        </div>
                                    <div class="form-group">
                                        <div class="border-image row">
                                            <input  type="file" multiple="multiple" class="input-hidden"
                                                    id="files" name="images[]" accept="image/png, image/jpeg">
                                        </div>
                                    </div>
                                    <div class="img-upload-instruction alert alert-danger">
                                        <p>Tövsiyyə olunan şəkil ölçüləri (870x493)px</p>
                                        <p>Maksimum 1 MB.</p>
                                        <p>Qəbul olunan tiplər (png, jpg, jpeg).</p>
                                        <p>Maksimum 5 şəkil əlavə edin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-section post-contact">
                            <div class="post-ad-title">
                                <i class="fas fa-user"></i>
                                <h3 class="item-title">Əlaqə</h3>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label" onclick="yoxla()">
                                        Şəhər
                                        <span>*</span>
                                    </label>
                                </div>
                                <input hidden value="{{$user->id}}" name="user_id">
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="form-control select-box" name="city">
                                            <option value="0">Ərazi seçin</option>
                                            @foreach($cities as $city)
                                                <option name="city" {{$user->adress==$city->id ? "selected" : ''}} value="{{$city->id}}" >{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <input hidden value="{{$user->id}}" name="user_id">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Ad
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="text" value="{{$user->user_role == 0 ? $user->name  : $store->name}}" class="form-control" name="user_name" id="user_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Mobil nömrə
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="text" value="{{$user->mobile}}" class="form-control" name="phone" id="phone">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="control-label">
                                        Email
                                    </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="email" value="{{$user->email}}" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">

                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="submit" class="submit-btn" value="Təsdiqlə">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
<script>


   const getAltCategory = (id) => {
       const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
           type: "POST",
           url: "/advert/create/get/category",
           data: {
               _token: CSRF_TOKEN, id: id,
           },
           success: function (datas) {
               let select = `<option value="0">Kateqoriya seçin...</option>`

               for(let data of datas){
                  select+=`<option value="${data.id}">${data.name}</option>`
               }
                document.getElementsByClassName('alt_category')[0].style.display = 'flex'
               document.getElementById('alt_category').innerHTML = select;
           },
           error: function () {
               alert('Error... 5000');
           }
       })
   }
   const getThirdCategory = (id) => {
       const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
           type: "POST",
           url: "/advert/create/get/category/third",
           data: {
               _token: CSRF_TOKEN, id: id,
           },
           success: function (datas) {
               if(datas.length != 0 ){
                   let select = ` <select name="category[]" class="form-control select-box" required="required" name="alt_category">
        <option value="0">Kateqoriya seçin...</option>`

                   for(let data of datas){
                       select+=`<option value="${data.id}">${data.name}</option>`
                   }
                   select+=`</select>`
                   document.getElementsByClassName('third_category')[0].style.display = 'flex'
                   document.getElementById('third_category').innerHTML = select;
               }else{
                   document.getElementsByClassName('third_category')[0].style.display = 'none'
               }

           },
           error: function () {
               alert('Error... 5000');
           }
       })
   }

   const uploadFile = () => {
            $('#files').click();
   }

   $(document).ready(function() {
       let arr = [];
       if (window.File && window.FileList && window.FileReader) {
           $("#files").on("change", function(e) {
               var files = e.target.files,
                   filesLength = files.length;

               for (var i = 0; i < filesLength; i++) {

                   var f = files[i]
                   var fileReader = new FileReader();
                   fileReader.onload = (function(e) {
                       var file = e.target;
                       console.log(e.target.result)
                       $("<span class=\"pip\">" +
                           "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                           "<br/><button class=\"remove\ btn \ btn-outline-danger \">Sil</button>" +
                           "</span>").insertAfter("#files");
                       $(".remove").click(function(){
                           $(this).parent(".pip").remove();
                       });
                   });
                   fileReader.readAsDataURL(f);
                   arr.push(e.target.result);

               }
           });
       } else {
           alert("Your browser doesn't support to File API")
       }
   });
   function Check()
   {
       let radio = document.querySelectorAll(".radio");
       for (let j=0;j<radio.length;j++)
       {
           if (radio[j].checked === true)
           {
               radio[j].value = j;
           }else{
               radio[j].value = j;
           }
       }
   }

   function Delete() {
       document.querySelectorAll('.pip').forEach(function(a) {
           a.remove()
       })
   }

   function yoxla(){
      console.log(document.getElementById('files').value);
   }

</script>
@endsection
