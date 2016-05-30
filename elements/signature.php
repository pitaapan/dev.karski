<script>
  var supportsInlineSvg = (function() {
    var div = document.createElement('div');
    div.innerHTML = '<svg/>';
    return (div.firstChild && div.firstChild.namespaceURI) == 'http://www.w3.org/2000/svg';
  }());
  var supportsInputRange = (function() {
    var input = document.createElement('input');
    input.setAttribute('type', 'range');
    return input.type != 'text';
  }());
  document.documentElement.className += (supportsInlineSvg ? ' inline-svg' : '') + (supportsInputRange ? ' input-range' : '');
</script>

<div class="full-sketch-container">
    <svg xmlns="http://www.w3.org/2000/svg" width="1722" height="965" viewBox="0 0 1236 841.9">
        <style>path {fill: none; stroke: #fff; stroke-width: 4; animation: alternate infinite;}</style>

        <path d="M100,305.7l-11.2,32.5
        c0,0-6.3,30.7-6.5,35.2c-0.2,4.5-4.2,58.5-3.8,65.7s0.7,55.8,3.5,82.7c2.8,26.8,14.5,81,18,91.3s1.7,10,0,9.8
        c-1.7-0.2-7.9-10.8-9.8-18.8S76.8,544.2,74,521.2c-2.8-23-5.2-61.2-5.2-81.5c0-20.3,2.3-48.5,5.2-61.5s19.7-53.7,26.5-63.3
        c6.8-9.7,23.5-31.5,36.3-41.5c12.8-10,31.2-19.3,38.8-21.7c7.7-2.3,20.2-1,24.2,0s26.2,10.7,31.2,23.2s9.8,30.3,9.8,39.8
        s-2.2,32.2-6.5,39.8c-4.3,7.7-20.5,28.5-37.5,40.8c-17,12.3-39,23-54,28.3c-15,5.3-44.2,13.5-50.2,15.7c-6,2.2-9.2,3.3-10,5.2
        c-0.8,1.8-1.2,2.8,0.2,4.3c1.3,1.5,3.3,2.2,3.3,2.2"/>
        <path d="M165.8,550.2
        c0,0-3.3,4-3.8,6.2c-0.5,2.2-0.2,6.8,1,8.2s10.8,2.3,15.7,0c4.8-2.3,15.2-6.3,34-30.8c18.8-24.5,29-39,34.3-50.2s3-23,0-25.8
        c-3-2.8-9.2-9.3-25.8,0c-16.7,9.3-27.2,19.8-33.7,32.8s-11.2,34.3-11.5,45.8s1,26,3.8,36.3c2.8,10.3,6.5,16.7,10.7,20.8
        s14.8,10.7,26.7,5c11.8-5.7,24.2-14,30-20.2c5.8-6.2,10.2-11.5,10.2-11.5"/>
        <path d="M343.5,348
        c0,0,1.2-7.5-0.8-9.7c-2-2.2-4.5-3.7-8.5,1.5c-4,5.2-11.3,17.8-13.7,31.5c-2.3,13.7-3.8,26.3-4.7,44.8c-0.8,18.5-1.8,63.3-1.8,71.3
        s1,42.8,0,49.5s-3.7,24.3-9.8,27c-6.2,2.7-14.5,0.7-18.8-19.8c-4.3-20.5-7.2-34.8-4.2-45.3s7.8-13.8,13.8-16
        c6-2.2,14.8-5.2,31.3-1.7s27.8,8.8,39.2,11.8s19,5.2,27.8,2.2c8.8-3,37.2-20.7,43.8-25.5c6.7-4.8,9.2-5.8,12-10.3
        c2.8-4.5,7-9-6.3-11.8c-13.3-2.8-35.2,0-46.5,11c-11.3,11-23.8,27.5-27.2,48.8c-3.3,21.3-3.3,32.8,0.3,45c3.7,12.2,11,17.3,21.5,21
        c10.5,3.7,32.7,2.8,43.8-5"/>
        <path d="M613.5,264.9
        c0,0,5.2-9.1,5.4-14.2c0.2-5,0-8.6-2.7-8.2c-2.7,0.4-3.9,0.9-5.8,7.3c-1.9,6.3-24.1,62.7-30.7,93.5s-16.5,83.8-19.2,115.8
        c-2.8,31.9-5.9,114.8-5.9,121.4c0,6.5-1.2,42.9-1.2,42.9s15.9-75.6,18.5-84c2.6-8.4,12-50.6,18.2-70c6.2-19.4,22.5-64.8,38.5-86.4
        c15.9-21.7,33.6-43.7,60.3-64.4c26.7-20.7,51.8-33,72.5-37.5s34.1-2.2,37.8,1.9c3.6,4.1,5.9,12.1-8.5,27.1s-23.4,22.6-27.6,25.8"/>
        <path d="M688.2,395.2
        c-18,6-36.3,11.3-46.3,17.8s-33.8,23.3-39,50.5c-5.2,27.2-1.8,39.8,0,48c1.8,8.2,10.7,27,17.5,34c6.8,7,17.3,17.2,27.7,19.2
        s23.5-0.8,29.5-4.8"/>
        <path d="M744.3,486.1
        c0,0-6.3,1.7-15.5,8.2c-7.5,5.3-16,15.8-20.2,29.9c-4.2,14.2-3.9,29,9.8,34.8c10.8,4.5,22.8,0.4,32.8-8.9
        c11.1-10.3,9.6-21.8-0.8-25.1s-16.4-4.7-29.4-6.2c-12-1.4-15.9-0.8-27.2-3.8"/>
        <path d="M699,470.5
        c0,0,20.2-27.8,34.5-37.7c14.3-9.8,31.7-20.7,41.2-22.3s26-6.7,27,15.7c1,22.3-9,33.2-15.2,45.5c-6.2,12.3-17.3,43.7-19.2,53
        c-1.8,9.3-2.5,27-2,31.5"/>
        <path d="M809.5,477
        c0,0,3,21.2,2.8,34.3c-0.2,13.2-5.2,37.8-7,42c-1.8,4.2-5.5,5.8-5.3-2.7s11.3-55,21.7-76.2c10.4-21.2,18.1-32.5,28.6-38.5
        s26.3-5.5,29.8,1.8c3.5,7.3,3.7,18.7-1.3,23.7s-20.3,13.2-32.2,16.3c-11.8,3.2-20.8,6-21.7,15.2s-0.7,23.5,11,30s18.8,8.3,28.2,1.7"/>
        <path d="M942.3,439.7
        c0,0-11.5-13.7-24.3-8.4c-12.6,5.2-21.4,19.1-5.7,36.7c16.5,18.6,28.8,23,30,31.7c1.2,8.7-0.2,15.2-7.5,24.7
        c-6.7,8.8-20.1,17.4-33.4,29.1c-13.2,11.6,1.2-6.7,1.2-6.7"/>
        <path d="M1021.3,366.3
        c0,0,32.2-22.5,36.3-23.8c4.2-1.3-31,32.8-38.7,43.3c-7.7,10.5-40.8,52-47.3,77s-1.5,36.3,3,40c4.5,3.7,11,10,32.3,0
        c21.3-10,26-13,31.2-15c5.2-2,10.7-3.5,1.2,12c-9.5,15.5-32.5,41-33.5,59.2s1.3,29.3,30.5,12.7c29.2-16.7,46.3-27.8,55.7-31.5
        c9.3-3.7,9.3-3.8,0,7c-9.3,10.8-15.3,24.3-17.3,34.8s-3.3,15,2.2,25.2"/>
        <path d="M1152.5,446.3
        c3.7,7.2,4.8,7.3,3.8,19c-1,11.7-1.7,15.8-1.7,15.8"/>     
        
        <path class="shade" d=""/><path class="letter" d=""/><path class="bubble" d=""/>
    </svg>
</div>

<p class="no-svg-support">There's a fancy 'Pete Karski' signature you're missing here because JavaScript or inline SVG isn't available.</p>

<script>
(function() {
  if (!supportsInlineSvg) return;

  function toArray(arr) {
    return Array.prototype.slice.call(arr);
  }

  var svg = document.querySelector('.full-sketch-container svg');
  svg.parentNode.style.display = 'block';
  svg.style.visibility = 'hidden';

  function fullSketch() {
    svg.style.visibility = '';
    var paths = toArray(svg.querySelectorAll('path:not(.shade)'));
    paths.push(svg.querySelector('.shade'));
    var begin = 0;

    var durations = paths.map(function(path) {
      var length = path.getTotalLength();
      var className = path.getAttribute('class') || '';

      path.style.strokeDasharray = length + ' ' + length;
      path.style.strokeDashoffset = length;

      // no classList on svg elements in Safari :(
      if (className.indexOf('shade') != -1) {
        return 5;
      }
      else if (className.indexOf('letter') != -1) {
        return Math.pow(length, 0.5) * 0.02;
      }
      else {
      // Setting the speed of writing...
        return Math.pow(length, 0.4) * 0.03;
      }
    });

    // triggering a reflow so styles are calculated in their
    // start position, so they animate from here
    paths[0].getBoundingClientRect();

    paths.forEach(function(path, i) {
      path.style.transition = path.style.WebkitTransition = 'stroke-dashoffset ' + durations[i] + 's ' + begin + 's ease-in-out';
      path.style.strokeDashoffset = '0';
      begin += durations[i] + 0.1;
    });
  }

  window.addEventListener('load', fullSketch);
}());
</script>