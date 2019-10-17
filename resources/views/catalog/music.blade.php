@extends('app')
@section('content')
<script>
window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<section>
    <div class="container">
        <div class="row">
            

            <div class="sins " >
                
                    <?php foreach ($musics as $music): ?>
                        <div class="col-sm-3 col-xs-3" style="width:275px; ">

                                <div class="music-player">
                                  <div class="cover">
                                    <img src="{{ asset('/storage/uploads/musics/' . $music->id . '.jpg') }}" />   
                                     </div>
                                      <div class="titre">
                                        <h4 style=" margin: 0; font-size: 17px;font-weight: 500; color: #ccc; padding: 0 10%;" >{{$music->name}}</h4>
                                          <h2 style="margin: 0;font-size: 22px;color: #fff;padding: 0 10%;">{{$music->title}}</h2>
                                           </div>
                                            <div class="lecteur">
                                                <audio style="width: 100%;" class="fc-media">
                                               <source src="#" type="audio/mp3" />
                                              </audio>
                                            </div>
                                           </div>
                        </div>
                    <?php endforeach; ?>


               

                
            </div><!--/recommended_items-->

        </div>
    </div>

</section>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mediaelement/4.2.7/mediaelement-and-player.min.js'></script>
<script id="rendered-js">
      var audio = {
  init: function () {
    var $that = this;
    $(function () {
      $that.components.media();
    });
  },
  components: {
    media: function (target) {
      var media = $('audio.fc-media', target !== undefined ? target : 'body');
      if (media.length) {
        media.mediaelementplayer({
          audioHeight: 40,
          features: ['playpause', 'current', 'duration', 'progress', 'volume', 'tracks', 'fullscreen'],
          alwaysShowControls: true,
          timeAndDurationSeparator: '<span></span>',
          iPadUseNativeControls: true,
          iPhoneUseNativeControls: true,
          AndroidUseNativeControls: true });

      }
    } } };



audio.init();
      //# sourceURL=pen.js
    </script>
@endsection