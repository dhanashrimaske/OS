# Create your views here.
from django.shortcuts import render
from django.contrib.auth.forms import AuthenticationForm
from django.contrib.auth import login
from django.shortcuts import redirect

def login_view(request):
    if request.method == 'POST':
        form = AuthenticationForm(request, request.POST)
        if form.is_valid():
            login(request, form.get_user())
            return redirect('home')  # Replace 'home' with your desired redirect URL
    else:
        form = AuthenticationForm()
    return render(request, 'login.html', {'form': form})
