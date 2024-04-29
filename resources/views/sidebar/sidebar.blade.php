
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

        @foreach ($modul_permission as $modulmenu)

        <!-- {{$modulmenu->id}} -->
             
        <ul>

           
        
                @if($modulmenu->categorymenu==1 && $modulmenu->sub_childcategorymenu == 1 && $modulmenu->sub_childcategorymenu != ''  )

                  <li class="{{set_active([$modulmenu->link_menu])}} submenu">

                    <a class="{{ set_active([$modulmenu->link_menu]) ? 'noti-dot' : '' }}">
                        <i class="{{$modulmenu->namaicons}}"></i> <span style="font-size:12px;">{{$modulmenu->namamenu}} </span> 
                        <span class="menu-arrow"></span>
                    </a>

                     <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                    @foreach($data_subchildcategorymenu as $subchild)

              
                    @if($subchild->sub_childcategorymenu== $modulmenu->id &&  $subchild->categorymenu ==2   )

                    <!-- {{$subchild->id}}  -->

                   <li class="{{set_active([$subchild->link_menu])}} submenu">

                    <a href="#" class="{{ set_active([$subchild->link_menu]) ? 'noti-dot' : '' }}">
                        <i class="{{$subchild->namaicons}}"></i> <span style="font-size:10px;">{{$subchild->namamenu}} </span> 
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                 

                   


                    @foreach($modul_permission as $modul_access)

                    @if( $modul_access->categorymenu == 3 && $modul_access->sub_categorymenu==$subchild->id   )  

                    
                     @if( $subchild->sub_childcategorymenu = 1   )  

                     <!-- {{ $subchild->sub_categorymenu}} -->

                     <!-- {{ $modul_access->id}} 

                     {{ $modul_access->sub_categorymenu}}  -->



                
                      <li class="subchildmenu" >
                            
                        <a class="{{set_active([$modul_access->link_menu])}}" id="s_childmenu" style="font-size:11px;" href="{{ url('/') }}{{$modul_access->link_menu}}">{{$modul_access->namamenu}} </a>

                      </li>

                    @endif

                    @endif

                    @endforeach

                 



                 


                   


                      
                    </ul>

                    
                  </li> 

                   @endif 


                  <!-- batas collapse -->


   
                    </li>

                  

                
                    @endforeach

                    
                       
                    </ul>
                   
                    
                    </li> 

                 




                @endif
                

                @if($modulmenu->categorymenu==1 && $modulmenu->sub_categorymenu == $modulmenu->id && $modulmenu->sub_childcategorymenu == ''  )

                  <!-- {{$modulmenu->id}} -->

                <li class="{{set_active([$modulmenu->link_menu])}} submenu">

                <a  class="{{ set_active([$modulmenu->link_menu]) ? 'noti-dot' : '' }}">
                    <i class="{{$modulmenu->namaicons}}"></i> <span style="font-size:12px;">{{$modulmenu->namamenu}} </span> 
                    <span class="menu-arrow"></span>
                </a>

                <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                @foreach($data_subchildcategorymenu as $subchild)
                   
                
               <!-- {{ $modulmenu->id}} -->
              
                @if($subchild->sub_childcategorymenu== $modulmenu->id &&  $subchild->categorymenu ==2 && $subchild->link_menu!='' )

               <!-- {{$subchild->sub_childcategorymenu}} -->

                  <li class="subchildmenu" >
                          
                          <a class="{{set_active([$subchild->link_menu])}}" id="s_childmenu" style="font-size:10px;" href="{{ url('/') }}{{$subchild->link_menu}}"><span style="font-size:10px;">{{$subchild->namamenu}} </span>  </a>
    
                  </li>

                
               


                @endif

                @if($subchild->sub_childcategorymenu== $modulmenu->id &&  $subchild->categorymenu ==2 && $subchild->link_menu=='' )



                <!-- daerah parent dan child or subchildcategorymenu -->

                <li class="{{set_active([$subchild->link_menu])}} submenu">

                  <a  class="{{ set_active([$subchild->link_menu]) ? 'noti-dot' : '' }}">
                      <i class="{{$subchild->namaicons}}"></i> <span style="font-size:12px;">{{$subchild->namamenu}} </span> 
                      <span class="menu-arrow"></span>
                  </a>

                  <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                  @foreach($data_subchildcategorymenu as $modul_access_data)

              
                      @if($modul_access_data->sub_childcategorymenu== $subchild->id &&  $modul_access_data->categorymenu ==3   )

                      <!-- {{$subchild->id}}  -->

                      <li class="subchildmenu" >
                          
                          <a class="{{set_active([$modul_access_data->link_menu])}}" id="s_childmenu" style="font-size:10px;" href="{{ url('/') }}{{$modul_access_data->link_menu}}"><span style="font-size:10px;">{{$modul_access_data->namamenu}} </span>  </a>
    
                  </li>


                      @endif


                      @endforeach















                  </ul>



                <!-- batas  -->

                @endif






                

                @endforeach



                @else

                {{''}}

              

                
           

                 @endif 


                  </ul>


                  </li> 


                  </ul>
                
               

        
        
        
                  @endforeach
    
                </div>


                


    </div>
</div>
<!-- /Sidebar -->