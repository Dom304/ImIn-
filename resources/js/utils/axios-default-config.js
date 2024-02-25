export const axiosDefaultConfig = {
  timeout: 0,
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
  },
  //source: https://github.com/axios/axios#handling-errors
  //if we get a webpage, we are logged out, so redirect to the home/login page
  transformResponse: [
    data => {
      // Do whatever you want to transform the data
      if (data?.startsWith('<!doctype html>')) {
        window.location.href = '/home'
        return
      }
      else if (typeof data === 'string') {
        try {
          data = JSON.parse(data)
        }
        catch (e) { }
      }

      return data
    },
  ],
}