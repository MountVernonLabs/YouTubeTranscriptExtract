# YouTubeTranscriptExtract
Extracts caption and transcript files from YouTube's automatic translation

## Requirements
- PHP & Python installed
- Install of youtube-dl library: https://rg3.github.io/youtube-dl/download.html

## youtube-dl install procedure
```
sudo curl -L https://yt-dl.org/downloads/2016.07.06/youtube-dl -o /usr/local/bin/youtube-dl
sudo chmod a+rx /usr/local/bin/youtube-dl
```

## Usage
1) Edit video.list.  Place one line for each YouTube video ID in the file.
2) In terminal run sh get-transcripts.sh

The script will then run and produce two files:
- [YOUTUBEID].srt - this is your standard caption file
- [YOUTUBEID].txt - this is the raw transcript 
