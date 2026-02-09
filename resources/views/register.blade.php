<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi Akun</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat bg-fixed"
      style="background-image: url('{{ asset('images/bglogin.png') }}');">

  <div class="bg-white shadow-lg rounded-2xl w-full max-w-md p-8 m-8">
    <!-- Logo -->
    <div class="flex justify-center items-center">
      <img src="{{ asset('images/logosiaa.svg') }}" alt="IKT Logo" class="h-48" />
    </div>

    <!-- Alert -->
    <div id="alertBox" class="hidden p-3 mb-4 rounded-lg text-sm"></div>

    <!-- Form -->
    <form id="registerForm" class="space-y-4">
      <!-- Username -->
      <div>
        <label class="block text-sm font-medium">Username</label>
        <input type="text" name="username" id="usernameField" required placeholder="NIPP/NRP"
          class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-medium">Password</label>
        <div class="relative">
          <input type="password" name="password" id="passwordField" required
            class="w-full px-3 py-2 pr-10 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
          <button type="button" onclick="togglePassword('passwordField', 'eyeIconPassword')"
                  class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700">
            <svg id="eyeIconPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Confirm Password -->
      <div>
        <label class="block text-sm font-medium">Re-type Password</label>
        <div class="relative">
          <input type="password" name="password_confirmation" id="confirmPasswordField" required
            class="w-full px-3 py-2 pr-10 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
          <button type="button" onclick="togglePassword('confirmPasswordField', 'eyeIconConfirm')"
                  class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700">
            <svg id="eyeIconConfirm" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-medium">Email</label>
        <input type="email" name="email" id="emailField" required 
          class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Full Name -->
      <div>
        <label class="block text-sm font-medium">Full Name</label>
        <input type="text" name="full_name" required 
          class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none">
      </div>

      <!-- Divisi -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Divisi</label>
        <div class="relative">
          <select name="ID_DIVISI" id="divisiSelect" required
            class="w-full appearance-none px-4 py-2 rounded-lg border border-gray-300 
                   bg-white text-gray-800 shadow-sm focus:ring-2 focus:ring-blue-500 
                   focus:border-blue-500 outline-none transition duration-200 ease-in-out">
            <option value="">Pilih Divisi</option>
          </select>
        </div>
      </div>

      <!-- Subdivisi -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700 mb-2">Subdivisi</label>
        <div class="relative">
          <select name="ID_SUBDIVISI" id="subdivisiSelect" required
            class="w-full appearance-none px-4 py-2 rounded-lg border border-gray-300 
                   bg-white text-gray-800 shadow-sm focus:ring-2 focus:ring-blue-500 
                   focus:border-blue-500 outline-none transition duration-200 ease-in-out">
            <option value="">Pilih Subdivisi</option>
          </select>
        </div>
      </div>

      <!-- Submit -->
      <button type="submit" 
        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
        Submit
      </button>
    </form>

    <!-- Link ke Login -->
    <p class="text-center text-sm mt-4">
      Sudah punya akun? 
      <a href="{{ url('/') }}" class="text-blue-600 hover:underline">Login</a>
    </p>
  </div>

  <script>
    function togglePassword(inputId, iconId) {
      const input = document.getElementById(inputId);
      const icon = document.getElementById(iconId);
      if (input.type === 'password') {
        input.type = 'text';
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />';
      } else {
        input.type = 'password';
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />';
      }
    }

    const form = document.getElementById('registerForm');
    const alertBox = document.getElementById('alertBox');
    const divisiSelect = document.getElementById('divisiSelect');
    const subdivisiSelect = document.getElementById('subdivisiSelect');
    
    // Field elements
    const usernameField = document.getElementById('usernameField');
    const passwordField = document.getElementById('passwordField');
    const confirmPasswordField = document.getElementById('confirmPasswordField');
    const emailField = document.getElementById('emailField');

    // Load Divisi
    async function loadDivisi() {
      try {
        const res = await fetch("/api/m_divisi");
        const data = await res.json();

        data.forEach(div => {
          const option = document.createElement("option");
          option.value = div.ID_DIVISI;
          option.textContent = div.NAMA_DIVISI;
          divisiSelect.appendChild(option);
        });
      } catch (err) {
        console.error("Gagal load divisi:", err);
      }
    }
    loadDivisi();

    // Load Subdivisi berdasarkan divisi
    async function loadSubdivisi(idDivisi) {
      subdivisiSelect.innerHTML = '<option value="">Pilih Subdivisi</option>';
      if (!idDivisi) return;

      try {
        const res = await fetch(`/api/m_subdivisi/divisi/${idDivisi}`);
        const data = await res.json();

        data.forEach(sub => {
          const option = document.createElement("option");
          option.value = sub.ID_SUBDIVISI;
          option.textContent = sub.NAMA_SUBDIVISI;
          subdivisiSelect.appendChild(option);
        });
      } catch (err) {
        console.error("Gagal load subdivisi:", err);
      }
    }

    divisiSelect.addEventListener("change", (e) => {
      loadSubdivisi(e.target.value);
    });

    // Show Alert Function
    function showAlert(message, classes) {
      alertBox.textContent = message;
      alertBox.className = `p-3 mb-4 rounded-lg text-sm ${classes}`;
      alertBox.classList.remove("hidden");
    }

    function hideAlert() {
      alertBox.classList.add("hidden");
    }

    // VALIDASI REAL-TIME USERNAME - Hanya Angka
    usernameField.addEventListener("input", function () {
      const value = usernameField.value;

      if (value && !/^[0-9]*$/.test(value)) {
        showAlert("Username hanya NRP/NIPP!", "bg-red-100 text-red-600");
        usernameField.value = value.replace(/[^0-9]/g, "");
      } else {
        hideAlert();
      }
    });

    // VALIDASI REAL-TIME PASSWORD - Minimal 6 karakter
    passwordField.addEventListener("input", function () {
      const value = passwordField.value;

      if (value && value.length < 6) {
        showAlert("Password minimal 6 karakter!", "bg-red-100 text-red-600");
      } else {
        hideAlert();
        // Cek ulang confirm password jika sudah diisi
        if (confirmPasswordField.value) {
          validateConfirmPassword();
        }
      }
    });

    // VALIDASI REAL-TIME CONFIRM PASSWORD - Harus sama
    function validateConfirmPassword() {
      const password = passwordField.value;
      const confirmPassword = confirmPasswordField.value;

      if (confirmPassword && password !== confirmPassword) {
        showAlert("Password tidak sama!", "bg-red-100 text-red-600");
        return false;
      } else {
        hideAlert();
        return true;
      }
    }

    confirmPasswordField.addEventListener("input", validateConfirmPassword);

    // Form Submit Handler
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      // Validasi final sebelum submit
      const username = usernameField.value;
      const password = passwordField.value;
      const confirmPassword = confirmPasswordField.value;
      const email = emailField.value;

      // Cek username hanya angka
      if (!/^[0-9]+$/.test(username)) {
        showAlert("Username hanya NRP/NIPP!", "bg-red-100 text-red-600");
        return;
      }

      // Cek password minimal 6 karakter
      if (password.length < 6) {
        showAlert("Password minimal 6 karakter!", "bg-red-100 text-red-600");
        return;
      }

      // Cek password sama
      if (password !== confirmPassword) {
        showAlert("Password tidak sama!", "bg-red-100 text-red-600");
        return;
      }

      // Cek email ada @
      if (!email.includes("@")) {
        showAlert("Email harus mengandung @!", "bg-red-100 text-red-600");
        return;
      }

      // Ambil data dari form
      const formData = new FormData(form);
      const data = Object.fromEntries(formData);

      try {
        const response = await fetch("/api/register", {
          method: "POST",
          headers: {
            "Accept": "application/json",
            "Content-Type": "application/json"
          },
          body: JSON.stringify(data)
        });

        const result = await response.json();

        if (!response.ok) {
          let msg = result.message || "Registrasi gagal!";
          if (result.errors) {
            msg += " " + Object.values(result.errors).join(" ");
          }
          showAlert(msg, "bg-red-100 text-red-600");
        } else {
          showAlert(result.message, "bg-green-100 text-green-600");
          localStorage.setItem("token", result.token);
          
          setTimeout(() => {
            window.location.href = "/";
          }, 1500);
        }
      } catch (error) {
        console.error(error);
        showAlert("Terjadi kesalahan pada server.", "bg-red-100 text-red-600");
      }
    });
  </script>

</body>
</html