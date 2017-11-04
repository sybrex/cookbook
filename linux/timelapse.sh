mkdir ordered
x=1
for i in photo2/*JPG; 
do counter=$(printf %04d $x)
ln "$i" ordered1/img"$counter".jpg
x=$(($x+1))
done

#avconv -r 10 -i ordered1/img%04d.jpg -r 10 -vcodec libx264 -crf 20 -g 15 -vf crop=3840:2134,scale=1920:1080 r1.mp4
#avconv -i r1.mp4 -i audio.mp3 -c:v copy -c:a copy r2.mp4
#avconv -i r2.mp4 -ss 00:00:00 -t 00:00:26 -c:v copy -c:a copy result.mp4
