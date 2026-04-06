$path = resources/views/component/header.blade.php
$text = Get-Content $path -Raw
function ReplaceFirst($text,$old,$new){
  $pattern = [regex]::Escape($old)
  if(-not ([regex]::IsMatch($text,$pattern))){
    throw Pattern not found
  }
  return [regex]::Replace($text,$pattern,$new,1)
}
$old = [string]::Join([Environment]::NewLine,@(
   <div class=max-w-9xl lg:mx-24 mx-auto px-4 sm:px-6 py-3 ,
   flex flex-col sm:flex-row items-center justify-between gap-4 sm:gap-3
))
$new = [string]::Join([Environment]::NewLine,@(
   <div class="max-w-9xl lg:mx-24 mx-auto px-4 sm:px-6 py-3 ,
   flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between
))
$text = ReplaceFirst($text,$old,$new)
$old = [string]::Join([Environment]::NewLine,@(
     <div class="flex flex-col sm:flex-row items-center sm:items-start ,
   gap-3 sm:gap-6 text-xs sm:text-sm text-center sm:text-left
))
$new = [string]::Join([Environment]::NewLine,@(
     <div class="w-full flex flex-col sm:flex-row items-center sm:items-start ,
   gap-3 sm:gap-6 text-xs sm:text-sm text-center sm:text-left
))
$text = ReplaceFirst($text,$old,$new)
$old = [string]::Join([Environment]::NewLine,@(
       <a href="tel:+919140092133 ,
   class=flex items-center justify-center sm:justify-start gap-2 hover:text-black transition
))
$new = [string]::Join([Environment]::NewLine,@(
       <a href="tel:+919140092133 ,
   class=flex items-center justify-center flex-1 min-w-[170px] sm:flex-auto sm:justify-start gap-2 hover:text-black transition
))
$text = ReplaceFirst($text,$old,$new)
$old = [string]::Join([Environment]::NewLine,@(
       <a href="mailto:info@backendcodersindia.com ,
   class=flex items-center justify-center sm:justify-start gap-2 hover:text-black transition
))
$new = [string]::Join([Environment]::NewLine,@(
       <a href="mailto:info@backendcodersindia.com ,
   class=flex items-center justify-center flex-1 min-w-[200px] sm:flex-auto sm:justify-start gap-2 hover:text-black transition
))
$text = ReplaceFirst($text,$old,$new)
$old =     <div class="flex items-center justify-center gap-3
$new =     <div class="w-full flex flex-wrap items-center justify-center gap-3 sm:w-auto sm:justify-end
$text = ReplaceFirst($text,$old,$new)
Set-Content $path $text
