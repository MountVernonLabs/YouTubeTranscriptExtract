while read p; do
  youtube-dl --convert-subs srt  --write-auto-sub $p
  rm *.m*
  mv *.srt $p.srt
  php srtconvert.php $p.srt
  mv $p.srt $p.cap
done <video.list
for file in *.cap; do
    mv "$file" "`basename "$file" .cap`.srt"
done
