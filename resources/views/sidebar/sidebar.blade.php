
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">

        @foreach ($modul_permission as $modulmenu)

        <!-- {{$modulmenu->id}} -->
             
        <ul>

           
        
                @if($modulmenu->categorymenu==1 && $modulmenu->sub_childcategorymenu == 1 )

                  <li class="{{set_active([$modulmenu->link_menu])}} submenu">

                    <a class="{{ set_active([$modulmenu->link_menu]) ? 'noti-dot' : '' }}">
                        <i class="{{$modulmenu->namaicons}}"></i> <span style="font-size:12px;">{{$modulmenu->namamenu}} </span> 
                        <span class="menu-arrow"></span>
                    </a>

                     <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                    @foreach($data_subchildcategorymenu as $subchild)

                

                    @if($subchild->sub_categorymenu== 2 &&  $subchild->categorymenu ==2   )

                  <li class="{{set_active([$subchild->link_menu])}} submenu">

                    <a href="#" class="{{ set_active([$subchild->link_menu]) ? 'noti-dot' : '' }}">
                        <i class="{{$subchild->namaicons}}"></i> <span style="font-size:12px;">{{$subchild->namamenu}} </span> 
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                 

                    @foreach($data_subchildcategorymenu as $subchild)

                    @foreach ($modul_permission as $modulmenu_access)

                    @if( $subchild->sub_categorymenu == $modulmenu_access->id && $subchild->categorymenu == 3  && $subchild->jenis_menu=='' ) 

                  


                      <li class="subchildmenu" >
                            
                        <a class="{{set_active([$subchild->link_menu])}}" id="s_childmenu" style="font-size:12px;" href="{{ url('/') }}{{$subchild->link_menu}}">{{$subchild->namamenu}} </a>

                      </li>

                    </li>

                    @endif

                    @endforeach


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

                @if($modulmenu->categorymenu==1 && $modulmenu->sub_categorymenu == $modulmenu->id && $modulmenu->sub_childcategorymenu == '')

               
                <li class="{{set_active([$modulmenu->link_menu])}} submenu">

                  <a  class="{{ set_active([$modulmenu->link_menu]) ? 'noti-dot' : '' }}">
                      <i class="{{$modulmenu->namaicons}}"></i> <span style="font-size:12px;">{{$modulmenu->namamenu}} </span> 
                      <span class="menu-arrow"></span>
                  </a>

                  <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">

                  @foreach($data_subchildcategorymenu as $subchild)

                   <!-- <a style="color:white;">{{$subchild->id}}</a>  -->

                  <!-- @if($subchild->sub_categorymenu== $subchild->id &&  $subchild->categorymenu ==2 && $subchild->jenis_menu == 2 )

                  <li class="{{set_active([$subchild->link_menu])}} submenu">

                  <a  class="{{ set_active([$subchild->link_menu]) ? 'noti-dot' : '' }}">
                      <i class="{{$subchild->namaicons}}"></i> <span style="font-size:12px;">{{$subchild->namamenu}} </span> 
                      <span class="menu-arrow"></span>
                  </a>

                  <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}"> -->

                  @if($subchild->sub_categorymenu== $subchild->id &&  $subchild->categorymenu ==2 && $subchild->jenis_menu == 2 && $subchild->link_menu!='' )

                  <li class="subchildmenu" >
                          
                          <a class="{{set_active([$subchild->link_menu])}}" id="s_childmenu" style="font-size:12px;" href="{{ url('/') }}{{$subchild->link_menu}}"><span style="font-size:12px;">{{$subchild->namamenu}} </span>  </a>
    
                  </li>

                        <!-- @else
                  
                      
                          <li class="{{set_active([$subchild->link_menu])}} submenu">

                          <a  class="{{ set_active([$subchild->link_menu]) ? 'noti-dot' : '' }}">
                              <i class="{{$subchild->namaicons}}"></i> <span style="font-size:12px;">{{$subchild->namamenu}} </span> 
                              <span class="menu-arrow"></span>
                          </a>

                          <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}"> -->

                  @endif




                  @foreach($data_subchildcategorymenu as $subchild)

                  
                  @if( $subchild->sub_categorymenu!=  $subchild->id && $subchild->categorymenu == 3  && $subchild->jenis_menu == 3   ) 

          
                    <li class="subchildmenu" >
                          
                      <a class="{{set_active([$subchild->link_menu])}}" id="s_childmenu" style="font-size:12px;" href="{{ url('/') }}{{$subchild->link_menu}}">{{$subchild->namamenu}} </a>

                    </li>

                  </li>

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



                 

                
                  </ul>
                
               

        @endforeach
        </div>
    </div>
</div>
<!-- /Sidebar -->