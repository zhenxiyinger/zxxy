import request from '@/utils/request'

export function loginByUsername(username, password) {
  const data = {
    username,
    password
  }
  return request({
    url: '/admin/public/login',
    method: 'post',
    data
  })
}

export function logout() {
  return request({
    url: '/admin/public/logout',
    method: 'post'
  })
}

export function getUserInfo(token) {
  return request({
    url: '/admin/public/info',
    method: 'get',
    params: { token }
  })
}

