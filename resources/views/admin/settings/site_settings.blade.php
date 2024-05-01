@extends('admin.layouts.app')
@section('content')
<div>
   <!-- Breadcrumbs-->
   <div class="bg-white border-bottom py-3 mb-5">
      <div class="container-fluid d-flex justify-content-between align-items-start align-items-md-center flex-column flex-md-row">
         <nav class="mb-0" aria-label="breadcrumb">
            <h3 class="m-0">Site Settings</h3>
         </nav>
         <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <ol class="breadcrumb m-0">
               <li class="breadcrumb-item"><a href="./index.html">Admin</a></li>
               <li class="breadcrumb-item"><a href="./index.html">Settings</a></li>
               <li class="breadcrumb-item active" aria-current="page">Site Settings</li>
            </ol>
         </div>
      </div>
   </div>
   <!-- / Breadcrumbs-->
   <section class="container-fluid">
      <div class="card">
         <div class="card-header">
            <div class="row">
               <div class="mb-12">
                  @include('admin.common.alerts')
               </div>
            </div>
         </div>
         <!-- /.card-footer-->
         <div class="card-body">
            <div class="accordion" id="accordionExample">
               
            <!-- <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                     <i class="fas fa-lock"></i> &nbsp;Template Settings
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show"
                     aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <form action="{{route('settings.siteSettingsUpdate')}}" method="post" enctype="multipart/form-data">
                           {{csrf_field()}}
                           <div class="row">
                              {{-- <div class="col-md-5">


                                 <div class="form-group">

                                 </div>
                                 <div class="form-group">

                                 </div>
                                 <div class="form-group">

                                 </div>
                                 <div class="form-group">

                                 </div>
                                 <div class="form-group">
                                    <label for="analytics">Post View Template</label>
                                    <select class="form-control" name="post_view_template" id="post_view_template"
                                       onChange="getTemplateImage('post_view_template')"  >
                                       @foreach ($siteSettings['post_view_template']['templates'] as $template)
                                       @if ($siteSettings['post_view_template']['template_number'] == $template['template_number'])
                                       <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                       @else
                                       <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                       @endif
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group">

                                 </div>
                              </div> --}}
                              <div class="col-md-12" >

                                 <div class="row py-2">
                                    <div class="col-5">
                                       <div class="form-group">
                                          <label for="analytics">Select Header Template</label>
                                          <select class="form-control" name="header_template" id="header_template" onChange="getTemplateImage('header_template')">
                                             @foreach ($siteSettings['header_template']['templates'] as $template)
                                             @if ($siteSettings['header_template']['template_number'] == $template['template_number'])
                                             <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                             @else
                                             <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                             @endif
                                             @endforeach
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-7">
                                    <div class="row">
                                        preview
                                        <div class="col-12" id="preview_header_template"></div>
                                    </div>
                                </div>
                                 </div>

                                 <div class="row py-2">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="analytics">Select Slider Template</label>
                                            <select class="form-control" name="slider_template" id="slider_template" onChange="getTemplateImage('slider_template')">
                                               @foreach ($siteSettings['slider_template']['templates'] as $template)
                                               @if ($siteSettings['slider_template']['template_number'] == $template['template_number'])
                                               <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @else
                                               <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @endif
                                               @endforeach
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-7" id="preview_slider_template"></div>
                                 </div>


                                 <div class="row py-2">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="analytics">Select Section 1 Template</label>
                                            <select class="form-control" name="section1_template" id="section1_template" onChange="getTemplateImage('section1_template')">
                                               @foreach ($siteSettings['section1_template']['templates'] as $template)
                                               @if ($siteSettings['section1_template']['template_number'] == $template['template_number'])
                                               <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @else
                                               <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @endif
                                               @endforeach
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-7" id="preview_section1_template"></div>
                                 </div>

                                 <div class="row py-2">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="analytics">Select Section 2 Template</label>
                                            <select class="form-control" name="section2_template" id="section2_template" onChange="getTemplateImage('section2_template')">
                                               @foreach ($siteSettings['section2_template']['templates'] as $template)
                                               @if ($siteSettings['section2_template']['template_number'] == $template['template_number'])
                                               <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @else
                                               <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @endif
                                               @endforeach
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-7" id="preview_section2_template"></div>
                                 </div>


                                 <div class="row py-2">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="analytics">Select Section 3 Template</label>
                                            <select class="form-control" name="section3_template" id="section3_template"
                                               onChange="getTemplateImage('section3_template')">
                                               @foreach ($siteSettings['section3_template']['templates'] as $template)
                                               @if ($siteSettings['section3_template']['template_number'] == $template['template_number'])
                                               <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @else
                                               <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @endif
                                               @endforeach
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-7" id="preview_section3_template"></div>
                                 </div>


                                 <div class="row py-2">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="analytics">Select Footer Template</label>
                                    <select class="form-control" name="footer_template" id="footer_template"
                                       onChange="getTemplateImage('footer_template')">
                                       @foreach ($siteSettings['footer_template']['templates'] as $template)
                                       @if ($siteSettings['footer_template']['template_number'] == $template['template_number'])
                                       <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                       @else
                                       <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                       @endif
                                       @endforeach
                                    </select>
                                         </div>
                                    </div>
                                    <div class="col-7" id="preview_footer_template"></div>
                                 </div>


                                 <div class="row py-2">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="analytics">Category Page Template</label>
                                            <select class="form-control" name="category_view_template" id="category_view_template"
                                               onChange="getTemplateImage('category_view_template')">
                                               @foreach ($siteSettings['category_view_template']['templates'] as $template)
                                               @if ($siteSettings['category_view_template']['template_number'] == $template['template_number'])
                                               <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @else
                                               <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @endif
                                               @endforeach
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-7" id="preview_category_view_template"></div>
                                 </div>


                                 <div class="row py-2">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="analytics">Post Card Template</label>
                                            <select class="form-control" name="post_card_template" id="post_card_template"
                                               onChange="getTemplateImage('post_card_template')" >
                                               @foreach ($siteSettings['post_card_template']['templates'] as $template)
                                               @if ($siteSettings['post_card_template']['template_number'] == $template['template_number'])
                                               <option selected value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @else
                                               <option value="{{$template['template_number']}}">{{$template['template_number']}}</option>
                                               @endif
                                               @endforeach
                                            </select>
                                         </div>
                                    </div>
                                    <div class="col-7" id="preview_post_card_template"></div>
                                 </div>


                              </div>
                           </div>
                           <div >
                           <button type="submit" class="btn btn-danger text-white">Update Template Settings</button>
                           </div>
                     </div>
                  </div>
                 
                  </form>
               </div> 
            </div> -->
            <br/>
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseThree" aria-expanded="false"
                     aria-controls="collapseThree">
                  <i class="fas fa-cog"></i> &nbsp;Configuration Settings
                  </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse show"
                  aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                     <form action="{{route('settings.configuration.update')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="currency_symbol">Currency Symbol</label>
                                 <input type="text"
                                    name="currency_symbol"
                                    id="currency_symbol"
                                    class="form-control"
                                    value="{{$currencySymbol->description}}"
                                    placeholder="Currency Symbol" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-switch" style="padding-left:unset;">
                                 <div class="row">
                                    <div class="col-md-3">
                                    <label class="form-label" for="free_shipping">Free Shipping</label>

                                    </div>
                                    <div class="col-md-2">
                                    <input class="form-check-input btn-tog" name="free_shipping" type="checkbox" {{$freeShipping->description == 1 ? 'checked' : ''}} name="free_shipping">

                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group form-switch" style="padding-left:unset;">
                                 <div class="row">
                                    <div class="col-md-3">
                                    <label class="form-label" for="coupons_enabled">Coupons Enabled</label>

                                    </div>
                                    <div class="col-md-2">
                                    <input class="form-check-input btn-tog" name="coupons_enabled" type="checkbox" {{$couponsEnabled->description == 1 ? 'checked' : ''}} name="coupons_enabled">

                                    </div>
                                 </div>
                              </div>
                           </div>                          
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="low_stock_margin">Low Stock Margin</label>
                                 <input type="text"
                                    name="low_stock_margin"
                                    id="low_stock_margin"
                                    class="form-control"
                                    value="{{$lowStockMargin->description}}"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                    placeholder="Low Stock Margin" required>
                              </div>
                           </div>                          
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="admin_email">Admin Email</label>
                                 <input type="text"
                                    name="admin_email"
                                    id="admin_email"
                                    class="form-control"
                                    value="{{$adminEmail->description}}"
                                    placeholder="Admin Email" required>
                              </div>
                           </div>                          
                        </div>
                        <div class="row">
                           <div >
                              <button class="btn btn-danger text-white" type="submit">Save Changes</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <br/>
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseTwo" aria-expanded="false"
                     aria-controls="collapseTwo">
                  <i class="fas fa-lock"></i> &nbsp;Basic Site Parameters
                  </button>
               </h2>
               <div id="collapseTwo" class="accordion-collapse collapse show"
                  aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                     <form action="{{route('settings.updateSiteParams')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="site_name">Site Name</label>
                                 <input type="text"
                                    name="site_name"
                                    id="site_name"
                                    class="form-control"
                                    value="{{$siteName->description}}"
                                    placeholder="Site Name" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="site_description">Site Description</label>
                                 <input type="text"
                                    name="site_description"
                                    id="site_description"
                                    class="form-control"
                                    value="{{$siteDescription->description}}"
                                    placeholder="Site Description" required>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-10">
                              <div class="form-group">
                                 <label class="form-label" for="site_logo">Site Logo</label>
                                 <input type="file"
                                    name="site_logo"
                                    id="site_logo"
                                    class="form-control">
                              </div>
                           </div>
                           <div class="col-md-2">
                              Current Logo<br/>
                              @if($siteLogo->description != null)
                              <img src="{{asset($siteLogo->description)}}" style="width:100px;" alt="Site Logo"/>
                              @else
                              No logo uploaded
                              @endif
                           </div>
                        </div>
                        <div class="row">
                           <div >
                              <button class="btn btn-danger text-white" type="submit">Save Changes</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <br/>
            <div class="accordion-item">
               <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapseThree" aria-expanded="false"
                     aria-controls="collapseThree">
                  <i class="fas fa-users"></i> &nbsp;Social Links
                  </button>
               </h2>
               <div id="collapseThree" class="accordion-collapse collapse show"
                  aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                     <form action="{{route('settings.updateSocialLinks')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="facebook_link">Facebook Link</label>
                                 <input type="text"
                                    name="facebook_link"
                                    id="facebook_link"
                                    class="form-control"
                                    value="{{$facebook_link->description}}"
                                    placeholder="Facebook Link">
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="instagram_link">Instagram Link</label>
                                 <input type="text"
                                    name="instagram_link"
                                    id="instagram_link"
                                    class="form-control"
                                    value="{{$instagram_link->description}}"
                                    placeholder="Instagram Link">
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="twitter_link">Twitter Link</label>
                                 <input type="text"
                                    name="twitter_link"
                                    id="twitter_link"
                                    class="form-control"
                                    value="{{$twitter_link->description}}"
                                    placeholder="Twitter Link">
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label class="form-label" for="youtube_link">Youtube Link</label>
                                 <input type="text"
                                    name="youtube_link"
                                    id="youtube_link"
                                    class="form-control"
                                    value="{{$youtube_link->description}}"
                                    placeholder="Youtube Link">
                              </div>
                           </div>
                        </div>
                       
                       
                        <div>
                           <div>
                              <button class="btn btn-danger text-white" type="submit">Save Changes</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<!-- /.card -->
</section>
</div>
@endsection
<!-- jQuery -->
<script src="{{url('/plugins/jquery/jquery.min.js')}}"></script>
<script>
   $( document ).ready(function() {


   $.ajax({
   method : "get",
   url: "/admin/settings/site-settings/active",

   success: function(result){


   console.log('active data ===> ',result.templates);
    $.each(result.templates, (index, value) => {
       $('#preview_'+value.section).html('');
       $('#preview_'+value.section).append('<img src="'+value.template_image+'" alt="alt" class="w-100">');
    });


   }});
   });

   function getTemplateImage(Id){

       let templateNumber = document.getElementById(Id).value;

       $.ajax({
           method : "post",
           url: "/admin/settings/site-settings/get-template",
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           data : {
               'section' : Id,
               'templateNumber' : templateNumber
           },
           success: function(result){

           console.log('data ===> ',result.template);
           $(result.template).each(function(index, value) {
               // alert(value.id);
               $('#preview_'+Id).html('');
                $('#preview_'+Id).append('<img src="'+value.template_image+'" alt="alt" class="w-100">');
           });

       }});
   }

   function getAllActiveTemplates(){

   }
</script>
