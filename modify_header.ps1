 = 'resources/views/component/header.blade.php'
 = Get-Content -Raw 
 =  -replace 'flex flex-col sm:flex-row items-center justify-between gap-4 sm:gap-3', 'flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between'
 =  -replace 'flex flex-col sm:flex-row items-center sm:items-start', 'w-full flex flex-col sm:flex-row items-center sm:items-start'
 = 'tel\:+919140092133 \s+class=flex items-center justify-center sm:justify-start gap-2 hover:text-black transition
$phoneReplacement = tel:+919140092133 class=flex items-center justify-center flex-1 min-w-[170px] sm:flex-auto sm:justify-start gap-2 hover:text-black transition'
 =  -replace , 
 = 'mailto:info@backendcodersindia.com\s+class=flex items-center justify-center sm:justify-start gap-2 hover:text-black transition
$emailReplacement = mailto:info@backendcodersindia.com class=flex items-center justify-center flex-1 min-w-[200px] sm:flex-auto sm:justify-start gap-2 hover:text-black transition'
 =  -replace , 
 =  -replace 'class=flex items-center justify-center gap-3', 'class=w-full flex flex-wrap items-center justify-center gap-3 sm:w-auto sm:justify-end'
Set-Content  
