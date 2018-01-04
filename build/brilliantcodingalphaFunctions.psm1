
Write-Host "Installing functions"
function New-TestAssets {
  $folder = "C:\repos\bc-wptheme\tests";
  Push-Location $folder
  New-Item -ItemType SymbolicLink -Name .\assets -Target C:\repos\bc-wptheme\brilliantcodingalpha\assets\
  Pop-Location
}
function Start-TestServer {
  $folder = "C:\repos\bc-wptheme\tests";
  Push-Location $folder
  .\php-5.5.9-nts-Win32-VC11-x64\php.exe --% -S localhost:8000
  Pop-Location
}
Write-Host "Done"