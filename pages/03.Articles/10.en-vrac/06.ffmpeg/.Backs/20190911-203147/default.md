---
title: ffmpeg
private: false
date: '21:17 28-10-2018'
---

<style>
h3 {
    font-family : 'Roboto Condensed', Helvetica, sans-serif;
    font-weight : 300;
    font-size   : 21px;
}
a img {
    border : 0px;
    cursor : pointer;
}    
.img {
    border : 0px;
    cursor : pointer;
    max-height: 30%;
}  
    
img {
    border : 0px;
    cursor : pointer;
    max-height: 30%;
}    

h1 {
    margin      : 8px 0 0 0;
     background: #00b6de;
    font-family : 'Roboto Condensed', Helvetica, sans-serif;
    font-weight : 400;
    font-size   : 58px;
        margin: 0 0 16px 0;
    padding: 5px 15px;
    color: #ffffff;
    line-height: 1em;
}

 h2 {
    margin-left  : auto;
    margin-right : auto;
    padding: 5px 15px;
    font-size   : 22px;
    font-weight : 400;
    line-height : 1em;
    background: #E9A805;
 }

 .blue {
    background: #00b6de;
}
    
</style>
<!-- https://kwizzu.com/construct.html -->

FFmpeg aide 

[TOC]

# Trics 

> Original article : https://lukaprincic.si/development-log/ffmpeg-audio-visualization-tricks
  
## Audio Vector Scope
 <video class="wp-video-shortcode" id="video-4605-7_html5" preload="metadata"  src="http://lukaprincic.si/wp-content/uploads/2017/09/standing_pad.mp4?_=7"></video> 
      
```
ffmpeg -i INPUT_AUDIO.wav -filter_complex "[0:a]avectorscope=s=480x480:zoom=1.5:rc=0:gc=200:bc=0:rf=0:gf=40:bf=0,format=yuv420p[v];  [v]pad=854:480:187:0[out]"  -map "[out]" -map 0:a -b:v 700k -b:a 360k OUTPUT_VIDEO.mp4
```

The code above creates a mp4 video file with a vectorscope nicely centered inside a 854×480 (480p) video. If you need a 1:1 video, just exclude the pad part:

```
ffmpeg -i INPUT_AUDIO.wav -filter_complex "[0:a]avectorscope=s=480x480:zoom=1.5:rc=0:gc=200:bc=0:rf=0:gf=40:bf=0,format=yuv420p[v]"  -map "[v]" -map 0:a -b:v 700k -b:a 360k OUTPUT_VIDEO.mp4
```
    
Documentation on ‘avectorscope’ filter is here: https://ffmpeg.org/ffmpeg-filters.html#avectorscope. One can play with zoom and other options to produce desired form.

## Show waves
<video class="wp-video-shortcode" id="video-4605-8_html5" preload="metadata"  src="http://lukaprincic.si/wp-content/uploads/2017/09/standing_showwaves-1.mp4?_=8" wheight="50%" ><source type="video/mp4" src="http://lukaprincic.si/wp-content/uploads/2017/09/standing_showwaves-1.mp4?_=8"></video> 
    
```
ffmpeg -i INPUT.wav -filter_complex "[0:a]showwaves=mode=line:s=hd480:colors=White[v]" -map "[v]" -map 0:a -pix_fmt yuv420p -b:a 360k -r:a 44100  OUTPUT.mp4
```
more options: http://www.ffmpeg.org/ffmpeg-filters.html#showwaves
 
## Showspectrum
   <video class="wp-video-shortcode" id="video-4605-9_html5" preload="metadata" src="http://lukaprincic.si/wp-content/uploads/2017/09/standing_spectrum.mp4?_=9" ><source type="video/mp4" src="http://lukaprincic.si/wp-content/uploads/2017/09/standing_spectrum.mp4?_=9"><a href="http://lukaprincic.si/wp-content/uploads/2017/09/standing_spectrum.mp4">http://lukaprincic.si/wp-content/uploads/2017/09/standing_spectrum.mp4</a></video>
```
ffmpeg -i INPUT.wav  -filter_complex "[0:a]showspectrum=s=854x480:mode=combined:slide=scroll:saturation=0.2:scale=log,format=yuv420p[v]"  -map "[v]" -map 0:a  -b:v 700k -b:a 360k OUTPUT.mp4
```

Above code will create almost completely desaturated spectrum of the audio sliding from right to left. Again, there are various options to tweak, see here: https://ffmpeg.org/ffmpeg-filters.html#showspectrum-1
 

##  Histogram
   <video class="wp-video-shortcode" id="video-4605-10_html5" preload="metadata"  src="http://lukaprincic.si/wp-content/uploads/2017/09/standing_histogram.mp4?_=10" ><source type="video/mp4" src="http://lukaprincic.si/wp-content/uploads/2017/09/standing_histogram.mp4?_=10"><a href="http://lukaprincic.si/wp-content/uploads/2017/09/standing_histogram.mp4">http://lukaprincic.si/wp-content/uploads/2017/09/standing_histogram.mp4</a></video>  

```
ffmpeg -i INPUT.wav -filter_complex "[0:a]ahistogram=s=hd480:slide=scroll:scale=log,format=yuv420p[v]"  -map "[v]" -map 0:a  -b:a 360k OUTPUT.mp4
```
more options: http://www.ffmpeg.org/ffmpeg-filters.html#showwaves
 
## Static spectrogram
Sometimes you want to just create a static image.

### create a spectrogram as a single frame
```
ffmpeg -i INPUT.wav -lavfi 
showspectrumpic=s=hd480:legend=0,format=yuv420p 
SPECTROGRAM.png
```
### add png to audio - you need to know the length of audio
```
ffmpeg -loop 1 -i SPECTROGRAM.png -i INPUT.wav 
-s hd480 -t 00:01:00 -pix_fmt yuv420p 
-b:a 360k -r:a 44100 OUTPUT.mp4
 ```
	
### create a spectrogram as a single frame
```
ffmpeg -i INPUT.wav -lavfi 
showspectrumpic=s=hd480:legend=0,format=yuv420p 
SPECTROGRAM.png
 ```
### add png to audio - you need to know the length of audio
```
ffmpeg -loop 1 -i SPECTROGRAM.png -i INPUT.wav 
-s hd480 -t 00:01:00 -pix_fmt yuv420p 
-b:a 360k -r:a 44100 OUTPUT.mp4
```

Above one is in two steps. More info here: http://www.ffmpeg.org/ffmpeg-filters.html#showspectrumpic

    
## text overlays
 
```
   ffmpeg \
-i video1.mp4 -i video2.mp4
-filter_complex "[0:v:0] [0:a:0] [0:v:1] [0:a:1] concat=n=2:v=1:a=1 [v][a];
[v]drawtext=text='SOME TEXT':x=(w-text_w):y=(h-text_h):fontfile=OpenSans.ttf:fontsize=30:fontcolor=white[v]" \
-map "[v]" -map "[a]" -deinterlace \
-vcodec libx264 -pix_fmt yuv420p -preset $QUAL -r $FPS -g $(($FPS * 2)) -b:v $VBR \
-acodec libmp3lame -ar 44100 -threads 6 -qscale 3 -b:a 712000 -bufsize 512k \
-f flv "$YOUTUBE_URL/$KEY"
  ```
    
## Print file metadata etc.
     ffmpeg -i path/to/file.ext

# Convertion

## Convert all m4a files to mp3
     for f in *.m4a; do ffmpeg -i "$f" -acodec libmp3lame -vn -b:a 320k "${f%.m4a}.mp3"; done

## Convert video from .foo to .bar
 -g : GOP, for searchability 
``` 
ffmpeg -i input.foo -vcodec bar -acodec baz -b:v 21000k -b:a 320k -g 150 -threads 4 output.bar 
```

## Convert image sequence to video
     ffmpeg -r 18 -pattern_type glob -i '*.png' -b:v 21000k -s hd1080 -vcodec vp9 -an -pix_fmt yuv420p -deinterlace output.ext


## Listen to 10 seconds of audio from a video file
 -ss : start time /   -t  : seconds to cut /   -autoexit : closes ffplay as soon as the audio finishes
```
ffmpeg -ss 00:34:24.85 -t 10 -i path/to/file.mp4 -f mp3 pipe:play | ffplay -i pipe:play -autoexit
```

   
# Common switches

```bash
  -codecs       # list codecs
  -c:v              # video codec (-vcodec) - 'copy' to copy stream
  -c:a              # audio codec (-acodec)
```

```bash
-fs SIZE         # limit file size (bytes)
```

## Bitrate

```bash
-b:v 1M          # video bitrate (1M = 1Mbit/s)
-b:a 1M          # audio bitrate
```

## Video

```bash
-aspect RATIO    # aspect ratio (4:3, 16:9, or 1.25)
-r RATE          # frame rate per sec
-s WIDTHxHEIGHT  # frame size
-vn              # no video
```

## Audio

```bash
-aq QUALITY      # audio quality (codec-specific)
-ar 44100        # audio sample rate (hz)
-ac 1            # audio channels (1=mono, 2=stereo)
-an              # no audio
-vol N           # volume (256=normal)
```

### Example
 
  
## ffmpeg generate overlay complex filter for audio with background image
```bash
    ffmpeg -y -i input.mp3 -loop 1 -i background.png \
    -filter_complex "[0:a]showwaves=s=1280x720:mode=line,colorkey=0x000000:0.01:0.1,format=yuva420p[v];[1:v][v]overlay[outv]" \
    -map "[outv]" -pix_fmt yuv420p -map 0:a -c:v libx264 -c:a copy -shortest output.mp
```

[https://www.youtube.com/watch?v=zKYzJ_bEJVo](https://www.youtube.com/watch?v=zKYzJ_bEJVo)
```bash
ffmpeg -y -i audio.mp3 -loop 1 -i image.jpg \
    -filter_complex "[0:a]showwaves=s=1280x175:colors=Yellow:mode=line,format=yuv420p[v];[1:v][v]overlay=0:200[outv]" \
    -map "[outv]" -pix_fmt yuv420p -map 0:a -c:v libx264 -c:a copy -shortest output9.mp4
 ```
    
[https://www.youtube.com/watch?v=1htjI7YSNZo](https://www.youtube.com/watch?v=1htjI7YSNZo)
```bash
ffmpeg -y -i audio.mp3 -loop 1 -i image.jpg \
    -filter_complex "[0:a]showwaves=s=1280x720:mode=line,colorkey=0x000000:0.01:0.1,format=yuva420p[v];[1:v][v]overlay[outv]" \
    -map "[outv]" -pix_fmt yuv420p -map 0:a -c:v libx264 -c:a copy -shortest output1.mp4
```
[https://www.youtube.com/watch?v=H5dCKuN9Ius](https://www.youtube.com/watch?v=H5dCKuN9Ius)
 ```
ffmpeg -y -i audio.mp3 -loop 1 -i image.jpg \
    -filter_complex "[0:a]showwaves=s=1280x175:colors=White:mode=p2p,format=yuv420p[v];[1:v][v]overlay=0:200[outv]" \
    -map "[outv]" -pix_fmt yuv420p \
    -map 0:a -c:v libx264 -c:a copy -shortest output12.mp4
```
    
# Fancy Filtering Examples
 https://trac.ffmpeg.org/wiki/FancyFilteringExamples
 
## cellauto
<a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/cellauto.png" style="padding:0; border:none"><img alt="cellauto image" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/cellauto.png" title="cellauto image" /></a>

```bash
ffplay -f lavfi -i cellauto=rule=110
```

<p>Other interesting cellauto rule values: 9, 18, 22, 26, 30, 41, 45, 50, 54, 60, 62, 73, 75, 77, 82, 86, 89, 90, 97, 99, 101, 102, 105, 107, 109, <a class="ext-link" href="http://en.wikipedia.org/wiki/Rule_110"><span class="icon">​</span>110</a> (default), 124, 126, 129, 131, 133, 135, 137, 145, 146, 149, 150, 151, 153, 154, 161, 167, 169, 181, 182, 183, 193, 195, 210, 218, 225.</p>

<h3 id="life">life</h3>

<a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/life.png" style="padding:0; border:none"><img alt="life image" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/life.png" title="life image" /></a>

```bash
ffplay -f lavfi -i life=s=300x200:mold=10:r=60:ratio=0.1:death_color=#C83232:life_color=#00ff00,scale=1200:800:flags=16
```

<a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/life2.png" style="padding:0; border:none"><img alt="Second example for life filter (blue &amp; blur)" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/life2.png" title="Second example for life filter (blue &amp; blur)" /></a>

```bash
ffplay -f lavfi -i life=s=640x480:mold=10:r=100:ratio=0.1:death_color=blue:life_color=#00ff00,boxblur=2:2
```

<h3 id="mandelbrot">mandelbrot</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/mandelbrot.png" style="padding:0; border:none"><img alt="mandelbrot image" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/mandelbrot.png" title="mandelbrot image" /></a></p>

```bash
ffplay -f lavfi -i mandelbrot
```

<h3 id="mirroreffect">mirror effect</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/ffplay-mirror.jpg" style="padding:0; border:none"><img alt="Mirror effect with lavfi" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/ffplay-mirror.jpg" title="Mirror effect with lavfi" /></a></p>

```bash
ffplay -i INPUT -vf "crop=iw/2:ih:0:0,split[left][tmp];[tmp]hflip[right];[left][right] hstack"
```

<h3 id="videochannelseparationeffectwithlutfilter">video channel separation effect with lut filter</h3>

<p>RGB version <a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/rgb_sep.jpg" style="padding:0; border:none"><img alt="original image plus images of the separations of the R, G, and B channels" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/rgb_sep.jpg" title="original image plus images of the separations of the R, G, and B channels" /></a></p>

```bash
ffplay -f lavfi -i testsrc -vf "split=4[a][b][c][d];[b]lutrgb=g=0:b=0[x];[c]lutrgb=r=0:b=0[y];[d]lutrgb=r=0:g=0[z];[a][x][y][z]hstack=4"
```

<p>YUV version <a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/yuv_sep.jpg" style="padding:0; border:none"><img alt="original image plus images of the separations of the Y, U, and V channels" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/yuv_sep.jpg" title="original image plus images of the separations of the Y, U, and V channels" /></a></p>

```
ffplay -f lavfi -i testsrc -vf "split=4[a][b][c][d];[b]lutyuv=u=128:v=128[x];[c]lutyuv=y=0:v=128[y];[d]lutyuv=y=0:u=128[z];[a][x][y][z]hstack=4"
```

<h3 id="histogramwaveform">histogram &amp; waveform</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/histograms.png" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/histograms.png" /></a></p>

<pre class="wiki">
ffplay -f lavfi -i mandelbrot -vf "format=gbrp,split=4[a][b][c][d],[d]histogram=display_mode=0:level_height=244[dd],[a]waveform=m=1:d=0:r=0:c=7[aa],[b]waveform=m=0:d=0:r=0:c=7[bb],[c][aa]vstack[V],[bb][dd]vstack[V2],[V][V2]hstack"
</pre>

<h3 id="vectorscopewaveforms">vectorscope &amp; waveforms</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/waveforms_vectorscope.png" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/waveforms_vectorscope.png" /></a></p>

```bash
ffplay -f lavfi -i mandelbrot -vf "format=yuv444p,split=4[a][b][c][d],[a]waveform[aa],[b][aa]vstack[V],[c]waveform=m=0[cc],[d]vectorscope=color4[dd],[cc][dd]vstack[V2],[V][V2]hstack"
```

<h3 id="waveform">waveform</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/waveform.jpg" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/waveform.jpg" /></a></p>

<p>Split the waveform filter to show broadcast range of the waveform (y values between 16 and 235) in green and out of broadcast range in red.</p>

```bash
ffplay -i http://download.blender.org/peach/bigbuckbunny_movies/big_buck_bunny_480p_surround-fix.avi  -vf "split[a][b];[a]format=gray,waveform,split[c][d];[b]pad=iw:ih+256[padded];[c]geq=g=1:b=1[red];[d]geq=r=1:b=1,crop=in_w:220:0:16[mid];[red][mid]overlay=0:16[wave];[padded][wave]overlay=0:H-h"
```

<h3 id="waveformwithenvelope">waveform with envelope</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/waveforme.png" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/waveforme.png" /></a></p>

<p>Split the waveform filter to show broadcast range of the waveform (y values between 16 and 235) in green and out of broadcast range in red and also use envelope.</p>

```bash
ffplay ~/matrixbench_mpeg2.mpg -vf "split[a][b];[a]waveform=e=3,split=3[c][d][e];[e]crop=in_w:20:0:235,lutyuv=v=180[low];[c]crop=in_w:16:0:0,lutyuv=y=val:v=180[high];[d]crop=in_w:220:0:16,lutyuv=v=110[mid] ; [b][high][mid][low]vstack=4"
```

<h3 id="morewaveformsandvectorscope">more waveforms and vectorscope</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/wfmg.jpg" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/wfmg.jpg" /></a> <a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/wfmgc.jpg" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/wfmgc.jpg" /></a></p>

<h3 id="datascope">datascope</h3>

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/datascope.jpg" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/datascope.jpg" /></a></p>

# Audio

## Combine video and audio into 1 file
     ffmpeg -i video.ext -i audio.ext -c:v copy -c:a copy output.ext

<h3 id="aevalsrc">aevalsrc</h3>

Making some random "musical" keys:

```bash
% cat expr
# floor(t): 0 0 0 0 0 ... 1 1 1 1 1 ... 2 2 2 2 2
#  =&gt; set a random key when floor(t) changes
if(eq(floor(t),ld(2)),
    st(0,random(4)*3000+1000));

# the next value to compare floor(t) with
st(2,floor(t)+1);

# mod(t,1) makes t always in the range [0;1) for each key
st(1,mod(t,1));

# 0.6*... + 0.4*... for "echo" effect
# exp() to mitigate the sound according to the time
(0.6*sin(1*ld(0)*ld(1))+
 0.4*sin(2*ld(0)*ld(1)))*exp(-4*ld(1))
```

And to test it:

```bash
ffplay -f lavfi -i "aevalsrc=$(grep -v '^#' expr|tr -d '\n'|sed 's/\([,;]\)/\\\1/g')"
```

<h3 id="showwavesandshowspectrum">showwaves and showspectrum</h3>

<p>Given the audio file april.flac:</p>

```bash
ffplay -f lavfi 'amovie=april.flac,asplit=3[out1][a][b]; [a]showwaves=s=640x240[waves]; [b]showspectrum=s=640x240[spectrum]; [waves][spectrum] vstack[out0]'
```

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/ffplay-waves-spectrum.png" style="padding:0; border:none"><img alt="FFplay with showwaves and showspectrum" src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/ffplay-waves-spectrum.png" title="FFplay with showwaves and showspectrum" /></a></p>

<h3 id="showspectrum">showspectrum</h3>

<p>Given the multichannel audio file tearsofsteel-surround.flac:</p>

```bash
ffplay -f lavfi 'amovie=tearsofsteel-surround.flac,asplit=2[out1][a]; [a]showspectrum=color=channel:scale=cbrt:orientation=vertical:overlap=1:s=2048x1024[out0]'
```

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/mcspectrum.jpeg" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/mcspectrum.jpeg" /></a></p>

<p>Now with different colors and scaling:</p>

```bash
ffplay -f lavfi 'amovie=tearsofsteel-surround.flac,asplit=2[out1][a]; [a]showspectrum=color=fire:scale=log:orientation=vertical:overlap=1:s=1024x1024[out0]'
```

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/firespectrum.jpeg" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/firespectrum.jpeg" /></a></p>

<h3 id="avectorscope">avectorscope</h3>

<p>Given the audio file input.flac:</p>

```bash
ffplay -f lavfi 'amovie=input.flac,asplit=2[out1][a],[a]avectorscope=m=polar:s=800x400[out0]'
```

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/polar_avectorscope.png" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/polar_avectorscope.png" /></a></p>

<h3 id="showcqt">showcqt</h3>

<p>Given the audio file input.flac:</p>

```bash
ffplay -f lavfi 'amovie=input.flac,asplit=2[out1][a],[a]showcqt[out0]'
```

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/showcqt.png" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/showcqt.png" /></a></p>

<h3 id="showspectrumpic">showspectrumpic</h3>

<p>Given the audio file input.flac:</p>

```bash
ffmpeg -i input.flac -lavfi showspectrumpic=s=hd720 out.jpg
```

<p><a href="https://trac.ffmpeg.org/attachment/wiki/FancyFilteringExamples/showspectrumpic.jpg" style="padding:0; border:none"><img src="https://trac.ffmpeg.org/raw-attachment/wiki/FancyFilteringExamples/showspectrumpic.jpg" /></a></p>
</div>

    