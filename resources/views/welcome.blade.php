<style>
    table {
        width: 40%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }
    th {
        background-color: #ff9b9b;
        text-align: left;
    }

    html, body {
  width: 100%; 
  height: 100%;
  background: #BE1E2D;
  overflow: hidden;

}

.heart {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  
  opacity: 0;
  animation-name: radiate;
  animation-duration: 5s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  animation-direction: normal;
  animation-fill-mode: backwards;
  path {
  fill: #fff;
  }
}


.heart:nth-child(1) {
  animation-delay: -1s;
}
.heart:nth-child(2) {
  animation-delay: -2s;
}
.heart:nth-child(3) {
  animation-delay: -3s;
}
.heart:nth-child(4) {
  animation-delay: -4s;
}
.heart:nth-child(5) {
  animation-delay: -5s;
}

@keyframes radiate {
  0% {
    opacity: 0;
    transform: scale(0);
  }
  1% {
    opacity: 0.15;
  }

  100% {
    opacity: 0;
    transform: scale(2);
  }
}

.heart path {
  animation: 5s x infinite;
  transform-origin: 50% 50%;
}
@keyframes x {
  0% {
    transform:scale(1)
  }
  10%{
    transform: scale(0.95)
  }

  40% {
    transform: scale(1)
  }
  60% {
    transform: scale(0.95)
  }

  80% {
    transform: scale(1);
  }
  100% {
    transform: scale(1);
  }
}


</style>

<div class="wrapper">

    <svg class="heart" version="1.1"
         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
         x="0px" y="0px" width="101.7px" height="87.6px" viewBox="0 0 101.7 87.6" enable-background="new 0 0 101.7 87.6"
         xml:space="preserve">
    <path d="M51,12.8c0-0.1-0.1-0.1-0.1-0.2c0,0.1-0.1,0.1-0.1,0.2C31-10.7,0,0.2,0,28.9c0,27.6,40.7,56.9,50.9,58.8
        c10.1-1.8,50.9-31.1,50.9-58.8C101.7,0.2,70.7-10.7,51,12.8z"/>
    </svg>
    </div>

<center><h3>Information</h3></center>

<center><table>
    <tr>
        <th>Name</th>
        <th>Biography</th>
    </tr>
    @foreach ($authors as $author)
        <tr>
            <td>{{ $author->name }}</td>
            <td>{{ $author->biography->description }}</td>
        </tr>
    @endforeach
</table>
</center>

<script>
    $(function() {
  $love = $('.heart');
  for( var i = 0; i < 4; i++) {
    $('.wrapper').append($love.clone()); 
  }
});
</script>