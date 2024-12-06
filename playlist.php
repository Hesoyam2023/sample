<?php
// Set the content type for M3U
header('Content-Type: application/x-mpegURL');

// The direct M3U8 URL
$m3u8_url = 'https://manifest.googlevideo.com/api/manifest/hls_playlist/expire/1733511604/ei/VPVSZ_P_O9jG1d8P6dzpmA4/ip/2001:4455:2d6:cd00:7417:2e67:eec:ca35/id/Uk40kV_iUio.2/itag/96/source/yt_live_broadcast/requiressl/yes/ratebypass/yes/live/1/sgoap/gir%3Dyes%3Bitag%3D140/sgovp/gir%3Dyes%3Bitag%3D137/rqh/1/hdlc/1/hls_chunk_host/rr2---sn-2aqu-jbtd.googlevideo.com/xpc/EgVo2aDSNQ%3D%3D/ctier/SPL/playlist_duration/30/manifest_duration/30/gcr/ph/spc/qtApAe6H6WYMv8lnAhV2_4G5vjSmVEoEVwTPlKjMXl0gmTqag4y8V7cZ6y21s9w/vprv/1/playlist_type/DVR/hcs/sd/initcwndbps/545000/met/1733490005,/mh/cA/mm/44/mn/sn-2aqu-jbtd/ms/lva/mv/m/mvi/2/pl/44/rmhost/rr1---sn-2aqu-jbtd.googlevideo.com/rms/lva,lva/smhost/rr2---sn-2aqu-jbtk.googlevideo.com/dover/11/pacing/0/keepalive/yes/fexp/51319289,51326932,51331020,51335594,51347746/mt/1733489316/sparams/expire,ei,ip,id,itag,source,requiressl,ratebypass,live,sgoap,sgovp,rqh,hdlc,xpc,ctier,playlist_duration,manifest_duration,gcr,spc,vprv,playlist_type/sig/AJfQdSswRgIhAORncEmWBAxE2Z5VGH4KVXvCjCb6H8SQGTMAAjc06zu3AiEAv0xJXK_r0sj7HkiZnC3gmTDLWw9lyKak-_hrR4VKnfI%3D/lsparams/hls_chunk_host,hcs,initcwndbps,met,mh,mm,mn,ms,mv,mvi,pl,rmhost,rms,smhost/lsig/AGluJ3MwRQIhAOuzoa7yzr6LfN7XiawbDmsdKA0t3_2dznIEgcx6CazaAiBAI0mwQdsBSPhf0HUmJRfq7NDfg-GuqPoOP4SCVL0tKA%3D%3D/playlist/index.m3u8';

// Output the M3U content
echo "#EXTM3U\n";
echo "#EXTINF:-1, Live Stream\n";
echo $m3u8_url . "\n";
?>
