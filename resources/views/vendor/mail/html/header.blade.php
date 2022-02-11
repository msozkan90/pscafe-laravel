<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://instagram.fyei6-5.fna.fbcdn.net/v/t51.2885-19/108712417_1110774259309068_4505019561731608770_n.jpg?_nc_ht=instagram.fyei6-5.fna.fbcdn.net&_nc_cat=100&_nc_ohc=K79rw-npnCYAX9BakiL&edm=ALbqBD0BAAAA&ccb=7-4&oh=00_AT-O8KZZXZS0ijCjWgS3k4M48jMdPCVScXku97IEqVJ5Lw&oe=6208C6BC&_nc_sid=9a90d6" class="logo" alt="">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
