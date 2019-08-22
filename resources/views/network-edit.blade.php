@include('includes.base-dom/general-include-one-of-four')
<link href="{{ asset('css/treeview.css') }}" rel="stylesheet">
@include('includes.base-dom/general-include-two-of-four')
@include('includes.item-menus/PostAndGroupMenu')
@include('includes.menu_post')
@include('includes.base-dom/general-include-three-of-four')

<!-- Left Column -->
<div class="w3-col m2">


  <!-- Alert Box -->
  <br>

  <!-- End Left Column -->
</div>

<!-- Middle Column -->
<div class="w3-col m8">
  <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

    <h2>
      Groups

    </h2>
    <form  enctype="multipart/form-data" name="1" class="" action="{{ $allURLs['sub_post_store'] }}" method="post">

      <input class="g-bor-gre"  style="display: none;" type="text" name="All_Content" value="1">

      {{csrf_field()}}
      <div class="f-treeview">
        <ul>
          <li>
            Network
            <?php echo PostAndGroupMenu(); ?>
            <ul>
              <?php
              foreach ($PostList as $key => $value) {
                  ?>
                <li class="f-leaf">
                  <a href="{{$value['url']}}">
                    {{$key}}
                  </a>
                </li>
                <?php
              }
              ?>

            </ul>
          </li>
        </ul>
      </div>
    </form>

    <br>

  </div>

  <br>



  <!-- End Middle Column -->
</div>

<!-- Right Column -->
<div class="w3-col m2">

  <br>

  <!-- End Right Column -->
</div>



@include('includes.base-dom/general-include-four-of-four')
