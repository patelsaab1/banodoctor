                              <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Meta Title</label>
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="seo_meta_title" id="seo_meta_title" placeholder="Enter Meta Title "  value="{{$seo->seo_meta_title}}" onkeyup="check(this.value)">
                                              <span id="show_string_lenght"></span>
                                        </div>
                                </div>
                                
                                 <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Meta Keywords</label>
                                        <div class="col-12">



                                            <textarea class="form-control" name="seo_meta_keywords" id="seo_meta_keywords" rows="5" placeholder="Enter Meta Keywords" >{{ $seo->seo_meta_keywords }}</textarea>
                                           
                                        </div>
                                </div>
                                
                                 <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Meta description</label>
                                        <div class="col-12">



                                            <textarea class="form-control" name="seo_meta_description" id="seo_meta_description" placeholder="Enter Meta Description " rows="5"
                                            
                                            onkeyup="check_description(this.value)"
                                            >{{ $seo->seo_meta_description}}</textarea>
                                            
                                             <span id="show_string_description_lenght"></span>

                                        </div>
                                </div>
                                
                                  <div class="mb-3 row">
                                    <label for="inputIcon" class="col-form-label">Slug</label>
                                        <div class="col-12">



                                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug"  value="{{$seo->slug}}" >
                                             
                                        </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button class="bg-dark btn btn-primary">Save</button>
                                    </div>
                                </div>