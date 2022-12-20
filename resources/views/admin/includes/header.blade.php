    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        @include('admin.includes.sidebar')

        <div class="layout-page <?php if($title == 'Landing Page') { echo "ps-0"; } ?>">
          @include('admin.includes.navbar')
          <div class="content-wrapper">
            <div class="container-xxl container-p-y">
